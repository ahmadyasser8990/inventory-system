<?php

namespace App\Http\Controllers\Dashboard;

use App\Client;
use App\Sale;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Price;
use App\Product;
use App\SaleDetails;
use DB;
use Auth;

class SaleController extends Controller
{

    public function index()
    {
        $sales = Sale::all();
        return view('dashboard.invoices.sales.index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $clients = Client::all();
        $products = Product::where('status','available')->get();
        $prices = Price::all();
        $sale = Sale::latest()->first();
        $nextSaleId = isset($sale->id)?$sale->id+1:1;
        return view('dashboard.invoices.sales.create', compact('clients','products','prices','nextSaleId'));
    }

    public function updateSalePrice(Request $request)
    {

      if(!empty($request->price) && !empty($request->unit)){
             $ids = $request->ids;
             if(!empty($ids) && is_array($ids)){
                   foreach($ids as $id){

                       $product = Product::find($id);
                       if($request->unit == "fixed"){
                          $product->sale_price += $request->price;
                       }elseif($request->unit == "percentage"){
                         $percent = ($product->sale_price / 100) * $request->price;
                         $product->sale_price += $percent;
                       }
                       $product->save();

                   }
             }

         return response()->json(["success"=>"true"]);
      }
    }

    public function updateColorAndPurity(Request $request)
    {
      if(!empty($request->purity) || !empty($request->color)){
             $ids = $request->ids;
             $color = $request->color;
             $purity = $request->purity;

             if(!empty($ids) && is_array($ids)){
                   foreach($ids as $id){
                          $product = Product::find($id);

                       if(!empty($purity)){
                          $product->purity = $purity;
                       }if(!empty($color)){
                          $product->color = $color;
                       }
                          $product->save();
                   }
             }
            return response()->json(["success"=>"true"]);
      }
    }

    public function showProducts(Request $request)
    {

      if(!empty($request->ids)){
             $ids = $request->ids;
             $products = [];
             if(!empty($ids) && is_array($ids)){
                foreach($ids as $id){
                       $products[] = Product::with('category')->find($id);
                }
             }

         return response()->json(["success"=>"true","products"=>$products]);
      }
    }


    public function summaryInvoice(Request $request)
    {
        if(!empty($request->ids)){
            $ids = $request->ids;
            // dd($ids);
            if(!empty($ids) && is_array($ids)){

                    //    $products = Product::select('id','sale_price','category_id')
                    //    ->with('category')

                    // //    ->groupBy('category_id')
                    //    ->find($ids);
                    // //    ->sum('sale_price');

                    $products = DB::table('products as p')
                                ->join('categories as c','c.id','=','p.category_id')
                                ->whereIn('p.id',$ids)
                                ->groupBy('c.id')
                                ->select(
                                    'c.name as category_name',
                                    DB::raw('SUM(p.sale_price) as sale_price'),
                                    DB::raw('COUNT(c.id) as qty')
                                )
                                ->get();
                    $firstRow = [
                                  'category_name'=>"Total", 'sale_price'=>$products->sum('sale_price'),
                                  'qty'=> $products->sum('qty')
                                ];
                    $products = $products->toArray();
                    array_unshift($products,$firstRow);

                       return response()->json(["success"=>"true","products"=>$products]);
            }
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'invoice_date'=>'required',
            'payment_method'=>'required',
            'sale_type'=>'required',
        ]);
        $data['client_id'] = $request->client_no;
        $data['user_id'] = Auth::id();
        if($request->sale_type == 1) {
            $data['client_name'] = $request->client_name;
            $data['client_phone'] = $request->phone;
            $data['client_tax_no'] = $request->tax_no;
        } else {
            $data['client_name'] = $request->client_name_manual;
            $data['client_phone'] = $request->phone_manual;
            $data['client_tax_no'] = $request->tax_no_manual;
        }

        $data['payment_method'] = $request->payment_method;
        $data['sales_type'] = $request->sale_type;
        $data['invoice_date'] = $request->invoice_date;
        $data['sub_total'] = $request->sub_total;
        $data['discount_type'] = $request->discount_type;
        $data['discount_value'] = $request->discount_value;
        $data['vat_value'] = $request->vat_value;
        $data['final_total'] = $request->final_total;

        $sale_invoice = Sale::create($data);

        $details_list = [];
        for ($i = 0; $i < count($request->all_products); $i++) {
            $details_list[$i]['product_id'] = $request->all_products[$i];
            $product = Product::find($request->all_products[$i]);
            $product->status = 'sold';
            $product->save();
        }

        $sale_invoice->sale_details()->createMany($details_list);

        session()->flash('success',__('site.added_successfully'));
        return redirect()->route('dashboard.sales.index');
    }
    public function show($id)
    {
        $sale = Sale::find($id);
        $sale_details = SaleDetails::where('sale_id', $sale->id)->get();
        return view('dashboard.invoices.sales.invoice', compact('sale', 'sale_details'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {

        $products = SaleDetails::where('sale_id', $sale->id)->get();
        foreach ($products as $product) {

            $product_id = $product->product->id;

            $product_update = Product::find($product_id);
            // dd($product_update);
            $product_update->status = 'available';
            $product_update->save();

        }//end of for each


        $sale->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.sales.index');
    }
}

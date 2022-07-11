<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Supplier;
use App\PurchaseCash;
use App\PurchaseCashDetail;
use App\PurchaseOrder;
use App\PurchaseOrderDetail;
use App\Product;
use Intervention\Image\Facades\Image;
use DB;
use Validator;
class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->type == 'order'){
            $purchases = PurchaseOrder::with('supplier')->get();
            return view('dashboard.invoices.purchases.order',compact('purchases'));
        }elseif(request()->type == 'cash'){
            $purchases = PurchaseCash::get();
            return view('dashboard.invoices.purchases.cash',compact('purchases'));
        }

            $purchases = PurchaseOrder::with('supplier')->get();
            return view('dashboard.invoices.purchases.order',compact('purchases'));
        
    }

    public function summaryInvoice(Request $request)
    {
        if(!empty($request->ids)){
            $ids = $request->ids;
        
            if(!empty($ids) && is_array($ids)){

                 

                    $products = DB::table('products as p')
                                ->join('categories as c','c.id','=','p.category_id')
                                ->whereIn('p.id',$ids)
                                ->groupBy('c.id')
                                ->select(
                                    'c.name as category_name',
                                    DB::raw('SUM(p.purchase_price) as purchase_price'),
                                    DB::raw('COUNT(c.id) as qty')
                                )
                                ->get();
                    $firstRow = [
                                  'category_name'=>"Total", 'purchase_price'=>$products->sum('purchase_price'),
                                  'qty'=> $products->sum('qty')
                                ];
                    $products = $products->toArray();
                    array_unshift($products,$firstRow);

                       return response()->json(["success"=>"true","products"=>$products]);
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view('dashboard.invoices.purchases.create',compact('categories','suppliers'));
    }

    public function getSupplier(Supplier $supplier)
    {
          return $supplier;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
      
        $rules = [
            'invoice_date' => 'required',
            'payment_method' => 'required',
            'purchase_type' => 'required',

           

            'supplier_id' => 'required_if:purchase_type,order',

            'supplier_name' => 'required_if:purchase_type,cash',
            'supplier_phone_no' => 'required_if:purchase_type,cash',
            'supplier_tax_no' => 'required_if:purchase_type,cash',
 
       
            'added_product_id'=>'required',
        ];

        // $request->validate($rules,['added_product_id.required'=>'one product is required']);

        $validator = validator::make($request->all(),$rules,['added_product_id.required'=>'one product is required']);

        if ($validator->fails()) {
            return response()->json(['success'=>0,'errors' => $validator->errors(),400]);
        }
        $request_data = $request->all();
        // $image= null;
        // if ($request->image) {

        //     Image::make($request->image)
        //         ->resize(300, null, function ($constraint) {
        //             $constraint->aspectRatio();
        //         })
        //         ->save(public_path('/uploads/product_images/' . $request->image->hashName()));

        //     $image = $request->image->hashName();

        // }//end of if

        if($request->purchase_type == 'order')
        {
            $total = 0;
            foreach($request->added_product_id as $product){
                $product = Product::findorFail($product);
                $total += $product->purchase_price;
            }
            $purchaseOrder =  new PurchaseOrder;
            $purchaseOrder->date = $request->invoice_date;
            $purchaseOrder->purchase_type = $request->purchase_type;
            $purchaseOrder->payment_method = $request->payment_method;
            $purchaseOrder->supplier_id = $request->supplier_id;
            $purchaseOrder->final_total = $total;
            $purchaseOrder->save();            

            foreach($request->added_product_id as $product){
                $product = Product::findorFail($product);
                $purchaseOrderDetail = new PurchaseOrderDetail;
                $purchaseOrderDetail->purchase_order_id = $purchaseOrder->id;
                $purchaseOrderDetail->product_id = $product->id;
                $purchaseOrderDetail->save();
            }
            

           

        }else{
            $total = 0;
            foreach($request->added_product_id as $product){
                $product = Product::findorFail($product);
                $total += $product->purchase_price;
            }

            $purchaseCash =  new PurchaseCash;
            $purchaseCash->date = $request->invoice_date;
            $purchaseCash->purchase_type = $request->purchase_type;
            $purchaseCash->payment_method = $request->payment_method;
            $purchaseCash->final_total = $total;
            $purchaseCash->supplier_name = $request->supplier_name;
            $purchaseCash->supplier_phone = $request->supplier_phone_no;
            $purchaseCash->supplier_tax_no = $request->supplier_tax_no;
            $purchaseCash->save();

            
            foreach($request->added_product_id as $product){
                $product = Product::findorFail($product);
                $purchaseCashDetail = new PurchaseCashDetail;
                $purchaseCashDetail->purchase_cash_id = $purchaseCash->id;
                $purchaseCashDetail->product_id = $product->id;
                $purchaseCashDetail->save();
            }
            

           
            

        }
        return response()->json(['success'=>1,'type'=>$request->purchase_type]);

       
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

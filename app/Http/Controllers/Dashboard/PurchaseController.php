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

            'category_id' => 'required',

            'supplier_id' => 'required_if:purchase_type,order',

            'supplier_name' => 'required_if:purchase_type,cash',
            'supplier_phone_no' => 'required_if:purchase_type,cash',
            'supplier_tax_no' => 'required_if:purchase_type,cash',
 
            'product_supplier'=>'required',

            'extra_no' => 'required',
            'item_type' => 'required',
            'gold' => 'required',
            'purchase_price' => 'required',
        ];

        $request->validate($rules);
        $request_data = $request->all();
        $image= null;
        if ($request->image) {

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('/uploads/product_images/' . $request->image->hashName()));

            $image = $request->image->hashName();

        }//end of if

        if($request->purchase_type == 'order')
        {
            $purchaseOrder =  new PurchaseOrder;
            $purchaseOrder->date = $request->invoice_date;
            $purchaseOrder->purchase_type = $request->purchase_type;
            $purchaseOrder->payment_method = $request->payment_method;
            $purchaseOrder->supplier_id = $request->supplier_id;
            $purchaseOrder->final_total = $request->purchase_price;
            $purchaseOrder->save();

            $product = new Product;
            $product->image = $image;
            $product->supplier_id  = $request->product_supplier;
            $product->sale_price = $request->sale_price;
            $product->category_id = $request->category_id;
            $product->extra_no = $request->extra_no;
            $product->item_type =  $request->item_type;
            $product->design_no = $request->design_no;
            $product->purchase_price = $request->purchase_price;
            $product->description = $request->description;
            $product->gold = $request->gold;
            $product->marquis = $request->marquis;
            $product->baguette = $request->baguette;
            $product->big_stone = $request->big_stone;
            $product->princess = $request->princess;
            $product->colored = $request->colored;
            $product->dimaond_1 =  $request->dimaond_1;
            $product->dimaond_2 = $request->dimaond_2;
            $product->dimaond_3 = $request->dimaond_3;
            $product->dimaond_4 = $request->dimaond_4;
            $product->dimaond_5 = $request->dimaond_5;
            $product->purity = $request->purity;
            $product->color = $request->color;
            $product->status = "available";
            $product->save();

            $purchaseOrderDetail = new PurchaseOrderDetail;
            $purchaseOrderDetail->purchase_order_id = $purchaseOrder->id;
            $purchaseOrderDetail->product_id = $product->id;
            $purchaseOrderDetail->save();

            session()->flash('success', __('site.added_successfully'));
            return redirect()->route('dashboard.purchase.index',['type'=>'order']);

        }else{

            $purchaseCash =  new PurchaseCash;
            $purchaseCash->date = $request->invoice_date;
            $purchaseCash->purchase_type = $request->purchase_type;
            $purchaseCash->payment_method = $request->payment_method;
            $purchaseCash->final_total = $request->purchase_price;
            $purchaseCash->supplier_name = $request->supplier_name;
            $purchaseCash->supplier_phone = $request->supplier_phone_no;
            $purchaseCash->supplier_tax_no = $request->supplier_tax_no;
            $purchaseCash->save();

            $product = new Product;
            $product->image = $image;
            $product->supplier_id  = $request->product_supplier;
            $product->sale_price = $request->sale_price;
            $product->category_id = $request->category_id;
            $product->extra_no = $request->extra_no;
            $product->item_type =  $request->item_type;
            $product->design_no = $request->design_no;
            $product->purchase_price = $request->purchase_price;
            $product->description = $request->description;
            $product->gold = $request->gold;
            $product->marquis = $request->marquis;
            $product->baguette = $request->baguette;
            $product->big_stone = $request->big_stone;
            $product->princess = $request->princess;
            $product->colored = $request->colored;
            $product->dimaond_1 =  $request->dimaond_1;
            $product->dimaond_2 = $request->dimaond_2;
            $product->dimaond_3 = $request->dimaond_3;
            $product->dimaond_4 = $request->dimaond_4;
            $product->dimaond_5 = $request->dimaond_5;
            $product->purity = $request->purity;
            $product->color = $request->color;
            $product->status = "available";
            $product->save();

            $purchaseCashDetail = new PurchaseCashDetail;
            $purchaseCashDetail->purchase_cash_id = $purchaseCash->id;
            $purchaseCashDetail->product_id = $product->id;
            $purchaseCashDetail->save();

            session()->flash('success', __('site.added_successfully'));
            return redirect()->route('dashboard.purchase.index',['type'=>'cash']);

        }

       
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

<?php

namespace App\Http\Controllers\Dashboard;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\ReturnSale;
use App\Sale;
use App\SaleDetails;
use Illuminate\Support\Facades\DB;

class ReturnSaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $return_sales = ReturnSale::all();
        return view('dashboard.invoices.return_sale.index', compact('return_sales'));
    }


    public function create()
    {
        $clients = Client::all();
        $products = Product::where('status','sold')->get();
        return view('dashboard.invoices.return_sale.create', compact('clients','products'));
    }
    public function store(Request $request)
    {
        $data['client_id'] = $request->client_no;
        $data['client_name'] = $request->client_name;
        $data['client_phone'] = $request->phone;
        $data['client_tax_no'] = $request->tax_no;
        $data['invoice_date'] = $request->invoice_date;
        $data['sub_total'] = $request->sub_total;
        $data['discount_type'] = $request->discount_type;
        $data['discount_value'] = $request->discount_value;
        $data['vat_value'] = $request->vat_value;
        $data['final_total'] = $request->final_total;

        $return_sale = ReturnSale::create($data);

        $details_list = [];
        for ($i = 0; $i < count($request->all_products); $i++) {
            $details_list[$i]['product_id'] = $request->all_products[$i];
            $product = Product::find($request->all_products[$i]);
            $product->status = 'available';
            $product->save();
        }

        $return_sale->return_sale_details()->createMany($details_list);

        session()->flash('success',__('site.added_successfully'));
        return redirect()->route('dashboard.return-sales.index');
    }

    public function show($id)
    {
        $return_sale = Sale::find($id);
        $return_sale_details = SaleDetails::where('sale_id', $return_sale->id)->get();
        return view('dashboard.invoices.return_sale.invoice', compact('return_sale', 'return_sale_details'));
    }

    public function edit($id)
    {
        $products = Product::all();
        $sale = Sale::find($id);
        $sale_details  = SaleDetails::where('sale_id',$sale->id)->get();
        return view('dashboard.invoices.return_sale.edit_invoice', compact('sale','sale_details','products'));

    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}

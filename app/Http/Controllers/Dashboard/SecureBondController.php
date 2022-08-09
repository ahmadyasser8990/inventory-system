<?php

namespace App\Http\Controllers\Dashboard;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Price;
use App\Product;
use App\SecureBond;
use App\SecureBondDetail;
use Auth;

class SecureBondController extends Controller
{

    public function index()
    {
        $secure_bonds = SecureBond::all();
        return view('dashboard.invoices.secure_bond.index', compact('secure_bonds'));
    }
    public function create()
    {
        $clients = Client::all();
        $products = Product::where('status','available')->get();
        $prices = Price::all();
        $secure_bond = SecureBond::latest()->first();
        $nextSecure_bondId = isset($secure_bond->id)?$secure_bond->id+1:1;
        return view('dashboard.invoices.secure_bond.create', compact('clients','products','prices','nextSecure_bondId'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'invoice_date'=>'required',
            'payment_method'=>'required',
            'secureBond_type'=>'required',
        ]);
        $data['client_id'] = $request->client_no;
        $data['user_id'] = Auth::id();
        if($request->secureBond_type == 1) {
            $data['client_name'] = $request->client_name;
            $data['client_phone'] = $request->phone;
            $data['client_tax_no'] = $request->tax_no;
        } else {
            $data['client_name'] = $request->client_name_manual;
            $data['client_phone'] = $request->phone_manual;
            $data['client_tax_no'] = $request->tax_no_manual;
        }

        $data['payment_method'] = $request->payment_method;
        $data['secureBond_type'] = $request->secureBond_type;
        $data['invoice_date'] = $request->invoice_date;
        $data['sub_total'] = $request->sub_total;
        $data['discount_type'] = $request->discount_type;
        $data['discount_value'] = $request->discount_value;
        $data['vat_value'] = $request->vat_value;
        $data['final_total'] = $request->final_total;

        $secureBond_invoice = SecureBond::create($data);

        $details_list = [];
        for ($i = 0; $i < count($request->all_products); $i++) {
            $details_list[$i]['product_id'] = $request->all_products[$i];
            $product = Product::find($request->all_products[$i]);
            $product->status = 'secure';
            $product->save();
        }

        $secureBond_invoice->secure_bond_details()->createMany($details_list);

        session()->flash('success',__('site.added_successfully'));
        return redirect()->route('dashboard.secure-bonds.index');

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $secure_bond = SecureBond::find($id);
        $secure_bond_details = SecureBondDetail::where('secure_bond_id', $secure_bond->id)->get();
        return view('dashboard.invoices.secure_bond.invoice', compact('secure_bond', 'secure_bond_details'));
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

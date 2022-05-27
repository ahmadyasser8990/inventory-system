<?php

namespace App\Http\Controllers\Dashboard;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\ReturnSecureBond;
use App\ReturnSecureBondDetail;

class ReturnSecureBondController extends Controller
{

    public function index()
    {
        $return_secure_bonds = ReturnSecureBond::all();
        return view('dashboard.invoices.return_secure_bond.index', compact('return_secure_bonds'));
    }

    public function create()
    {
        $clients = Client::all();
        $products = Product::where('status','secure_bond')->get();
        return view('dashboard.invoices.return_secure_bond.create', compact('clients','products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        $return_secure_bond = ReturnSecureBond::create($data);

        $details_list = [];
        for ($i = 0; $i < count($request->all_products); $i++) {
            $details_list[$i]['product_id'] = $request->all_products[$i];
            $product = Product::find($request->all_products[$i]);
            $product->status = 'available';
            $product->save();
        }

        $return_secure_bond->return_secure_bond_details()->createMany($details_list);

        session()->flash('success',__('site.added_successfully'));
        return redirect()->route('dashboard.return-secure-bonds.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $return_secure_bond = ReturnSecureBond::find($id);
        $return_secure_bond_details = ReturnSecureBondDetail::where('return_secure_bond_id', $return_secure_bond->id)->get();
        return view('dashboard.invoices.return_secure_bond.invoice', compact('return_secure_bond', 'return_secure_bond_details'));

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

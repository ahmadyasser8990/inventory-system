<?php

namespace App\Http\Controllers\Dashboard;

use App\Client;
use Auth;
use App\EchangeBond;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExchangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalAmount = EchangeBond::sum('amount');
        $exchangeBonds = EchangeBond::all();
        return view('dashboard.authorities.exchange_doc.index', compact('exchangeBonds', 'totalAmount'));
    }


    public function create()
    {
        $clients = Client::all();
        $exchangeBonds = EchangeBond::latest()->first();
        $nextExchangeBondId = isset($exchangeBonds->id)?$exchangeBonds->id+1:1;
        return view('dashboard.authorities.exchange_doc.create', compact('clients','nextExchangeBondId'));

    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'document_date'=>'required',
            'recieve_date'=>'required',
            'payment_method'=>'required',
        ]);

        $data['client_id'] = $request->client_no;
        $data['client_name'] = $request->client_name;
        $data['user_id'] = Auth::id();
        $data['payment_method'] = $request->payment_method;
        $data['amount'] = $request->amount;
        $data['document_date'] = $request->document_date;
        $data['recieve_date'] = $request->recieve_date;
        $data['description'] = $request->description;

        $exchangeBond = EchangeBond::create($data);

        session()->flash('success',__('site.added_successfully'));
        return redirect()->route('dashboard.exchange-doc.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $exchangeBond = EchangeBond::find($id);
        return view('dashboard.authorities.exchange_doc.show', compact('exchangeBond'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
            EchangeBond::find($id)->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.exchange-doc.index');
    }
}

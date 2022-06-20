<?php

namespace App\Http\Controllers\Dashboard;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $clients = Client::when($request->search, function($q) use($request){

            return $q->where('name','like', '%' . $request->search . '%')
            ->orwhere('phone','like', '%' . $request->search . '%')
            ->orwhere('address','like', '%' . $request->search . '%');

        })->latest()->get();
        return view('dashboard.documents.clients.index', compact('clients'));

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'tax_no' => 'required',
        ]);

        $request_data = $request->all();

        Client::create($request_data);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.clients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }


    public function update(Request $request, Client $client)
    {
        //
        $request->validate([

            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'tax_no' => 'required',
        ]);

        $request_data = $request->all();

        $client->update($request_data);
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.clients.index');
    }

    public function destroy(Client $client)
    {
        //
        // dd(request()->all());

        $client->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.clients.index');

    }
}

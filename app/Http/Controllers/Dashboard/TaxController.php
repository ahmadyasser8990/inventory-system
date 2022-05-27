<?php

namespace App\Http\Controllers\Dashboard;

use App\Tax;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $taxes = Tax::when($request->search, function($q) use($request){

            return $q->where('name','like', '%' . $request->search . '%')
            ->orwhere('tax_no','like', '%' . $request->search . '%');

        })->latest()->get();
        return view('dashboard.documents.taxes.index', compact('taxes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'tax_no' => 'required',
            'precentage' => 'required',
        ]);

        $request_data = $request->all();

        Tax::create($request_data);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.taxes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tax  $tax
     * @return \Illuminate\Http\Response
     */
    public function show(Tax $tax)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tax  $tax
     * @return \Illuminate\Http\Response
     */
    public function edit(Tax $tax)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tax  $tax
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tax $tax)
    {
        $request->validate([

            'name' => 'required',
            'tax_no' => 'required',
            'precentage' => 'required',
        ]);

        $request_data = $request->all();

        $tax->update($request_data);
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.taxes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tax  $tax
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tax $tax)
    {
        $tax->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.taxes.index');

    }
}

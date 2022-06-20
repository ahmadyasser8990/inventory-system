<?php

namespace App\Http\Controllers\Dashboard;

use App\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $suppliers = Supplier::when($request->search, function($q) use($request){

            return $q->where('name','like', '%' . $request->search . '%')
            ->orwhere('phone','like', '%' . $request->search . '%')
            ->orwhere('address','like', '%' . $request->search . '%');

        })->latest()->get();
        return view('dashboard.documents.suppliers.index', compact('suppliers'));
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
            'phone' => 'required',
            'tax_no' => 'required',
            'commercial_register' => 'required',
        ]);

        $request_data = $request->all();

        Supplier::create($request_data);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.suppliers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        $request->validate([

            'name' => 'required',
            'phone' => 'required',
            'tax_no' => 'required',
            'commercial_register' => 'required',
        ]);

        $request_data = $request->all();

        $supplier->update($request_data);
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.suppliers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.suppliers.index');
    }
}

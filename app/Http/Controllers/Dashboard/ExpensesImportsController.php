<?php

namespace App\Http\Controllers\Dashboard;

use App\Expenseimport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExpensesImportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $expenseimports = ExpenseImport::when($request->search, function($q) use($request){

            return $q->where('name','like', '%' . $request->search . '%')
            ->orwhere('no','like', '%' . $request->search . '%')
            ->orwhere('type','like', '%' . $request->search . '%');

        })->latest()->get();

        return view('dashboard.documents.ExpensesImports.index', compact('expenseimports'));

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

            'name' => 'required|max:255',
            'type' => 'required|max:255',
            'no' => 'required|max:255|unique:expenseimports',
          
        ]);

        $request_data = $request->all();

        ExpenseImport::create($request_data);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.expensesimports.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Expenseimport  $expenseimport
     * @return \Illuminate\Http\Response
     */
    public function show(Expenseimport $expenseimport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expenseimport  $expenseimport
     * @return \Illuminate\Http\Response
     */
    public function edit(Expenseimport $expenseimport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expenseimport  $expenseimport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expenseimport $expenseimport)
    {
        //
        $expenseimports = Expenseimport::find($request->id);

        $request->validate([
            'name' => 'required|max:255',
            'type' => 'required|max:255',
            'no' => 'required|max:255|unique:expenseimports,no,'.$expenseimports->id,
          
        ]);

        $expenseimports->update($request->all());
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.expensesimports.index');
    }


    public function destroy(Expenseimport $expenseimport, $id)
    {

        $expenseimport->destroy($id);
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.expensesimports.index');
    }
}

<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function index(Request $request)
    {
        $categories = Category::when($request->search, function($q) use($request){

            return $q->where('name','like', '%' . $request->search . '%')
            ->orwhere('category_no','like', '%' . $request->search . '%');

        })->latest()->get();
        return view('dashboard.documents.categories.index', compact('categories'));

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


    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'category_no' => 'required',
        ]);

        $request_data = $request->all();

        Category::create($request_data);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.categories.index');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([

            'name' => 'required',
            'category_no' => 'required',
        ]);

        $request_data = $request->all();

        $category->update($request_data);
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.categories.index');

    }
}

<?php

namespace App\Http\Controllers\Dashboard;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Supplier;
use Carbon\Carbon;
use App\Exports\ProductsExport;
use Excel;
use Validator;


class ProductController extends Controller
{

    public function index(Request $request)
    {
        //
        $categories = Category::all();
        $suppliers = Supplier::all();
        $products = Product::when($request->search, function($q) use ($request){

            return $q->where('item_no', '%' . $request->search . '%')
            ->orWhere('extra_no', 'like', '%' . $request->search . '%')
            ->orWhere('item_type', 'like', '%' . $request->search . '%')
            ->orWhere('gold', 'like', '%' . $request->search . '%');

        })->when($request->category_id, function($q) use ($request){

            return $q->where('category_id', $request->category_id);

        })->paginate(10);
        return view('dashboard.products.index',compact('products','categories','suppliers'));

    }

    public function deleteCheckedItem(Request $request)
    {

        $ids = $request->ids;

        Product::whereIn('id', $ids)->delete();
        return response()->json(['success' => 'Item have been deleted']);

    }

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
        
     
        $validator = validator::make($request->all(),[
            'category_id' => 'required',
            'supplier_id' => 'required',
            'extra_no' => 'required',
            'item_type' => 'required',
            'gold' => 'required',
            'purchase_price' => 'required',
            'image'=>'sometimes|mimes:png,jpg,jpeg'
        ]);

        if ($validator->fails()) {
            return response()->json(['success'=>0,'errors' => $validator->errors(),400]);
        }
        $request_data = $request->all();

        if ($request->hasFile('image')) {

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/product_images/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();

        }else{
            $request_data['image'] = null;
        }

        $request_data['status'] = 'available';
        $product = Product::create($request_data);
        return response()->json(['success'=>1,'data'=>$product]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }
    public function update(Request $request, Product $product)
    {
        $rules = [
            'category_id' => 'required',
            'supplier_id' => 'required',
            'extra_no' => 'required',
            'item_type' => 'required',
            'gold' => 'required',
            'purchase_price' => 'required',
        ];

        $request->validate($rules);
        $request_data = $request->all();

        if ($request->image) {

            if ($product->image != 'default.png') {

                Storage::disk('public_uploads')->delete('/product_images/' . $product->image);

            }//end of inner if

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/product_images/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();

        }//end of external if

        $product->update($request_data);
        session()->flash('success',__('site.updated_successfully'));
        return redirect()->route('dashboard.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if(request()->ajax())
        {
            if($product->delete()){
                return response()->json(['success'=>1]);
            }else{
                return response()->json(['success'=>0]);
            }

        }
    }

    public function exportIntoExcel(){

        $mytime = Carbon::now()->format('d-m-Y');
        return Excel::download(new ProductsExport, $mytime . '-productsList.xlsx');
    }

    public function printProduct(Request $request, Product $product){

        $categories = Category::all();
        $suppliers = Supplier::all();
        $products = Product::when($request->search, function($q) use ($request){

            return $q->where('id','like', '%' . $request->search . '%')
            ->orWhere('extra_no', 'like', '%' . $request->search . '%')
            ->orWhere('item_type', 'like', '%' . $request->search . '%')
            ->orWhere('gold', 'like', '%' . $request->search . '%');

        })->when($request->category_id, function($q) use ($request){

            return $q->where('category_id', $request->category_id);

        })->paginate(18);

        return view('dashboard.products.printProducts', compact('products','suppliers','categories'));
    }

    public function inquiryProduct(Request $request, Product $product){
        $categories = Category::all();
        $suppliers = Supplier::all();
        $product = Product::when($request->search, function($q) use ($request){

            return $q->where('id',$request->search);

        })->latest()->first();
        // dd($product);
        return view('dashboard.products.inquiryProducts', compact('product','suppliers','categories'));
    }


    public function import(){
        return view('dashboard.products.import');
    }

    public function importProceed(Request $request){
        // Toastr::success('Post added successfully :)','Success');
        // return back();
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $parsed_array = Excel::toArray([], $file);

            foreach ($parsed_array[0] as $key => $value) {
                if($key == 0){
                    continue;
                }

                Product::create([
                    'supplier_id' => $value[0],
                    'category_id' => $value[1],
                    'extra_no' => $value[2],
                    'item_type' => $value[3],
                    'gold' => $value[4],
                    'dimaond_1' => $value[5],
                    'dimaond_2' => $value[6],
                    'dimaond_3' => $value[7],
                    'dimaond_4' => $value[8],
                    'dimaond_5' => $value[9],
                    'baguette' => $value[10],
                    'marquis' => $value[11],
                    'big_stone' => $value[12],
                    'princess' => $value[13],
                    'colored' => $value[14],
                    'color' => $value[15],
                    'purity' => $value[16],
                    'description' => $value[17],
                    'purchase_price' => $value[18],
                    'sale_price' => $value[19],
                    'status' => 'متوفر',
                ]);

            }

        }
        session()->flash('success',__('site.added_successfully'));
        return redirect()->route('dashboard.products.index');

    }
}

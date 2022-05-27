<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    //
    protected $guarded = [];
    protected $appends = ['image_path', 'profit_percent'];

    public function getImagePathAttribute()
    {
        return asset('uploads/product_images/' . $this->image);

    }//end of image path attribute

    public function getProfitPercentAttribute()
    {
            $profit = $this->sale_price - $this->purchase_price;
            $profit_percent = $profit * 100 / $this->purchase_price;
            return number_format($profit_percent, 2);

    }//end of get profit attribute

    public function category()
    {
        return $this->belongsTo(Category::class);

    }//end fo category

    public function saleDetail()
    {
        return $this->belongsTo(SaleDetails::class);

    }//end fo category

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);

    }//end fo category

    public static function getProduct(){
        $records = DB::table('products')
        ->join("suppliers as sp","sp.id","=","products.supplier_id")
        ->join("categories as c","c.id","=","products.category_id")
        ->select('sp.name as supplier_name','c.name as category_name','products.id','extra_no',
        'item_type','gold','dimaond_1', 'dimaond_2', 'dimaond_3', 'dimaond_4',
        'dimaond_5','baguette','marquis','big_stone',
        'princess','colored','color','purity','description','purchase_price',
        'sale_price','status','products.created_at')->get()->toArray();
        return $records;


    }
}

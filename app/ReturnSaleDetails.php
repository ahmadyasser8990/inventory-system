<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReturnSaleDetails extends Model
{
    //
    protected $table ='return_sale_details';
    protected $guarded = [];

    public function product()
    {
     return $this->belongsTo(Product::class);
    }

    public function return_sale()
    {
     return $this->belongsTo(ReturnSale::class,'return_sale_id', 'id');
    }
}

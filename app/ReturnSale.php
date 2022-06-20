<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReturnSale extends Model
{
    protected $table ='return_sales';
    protected $guarded = [];

    public function return_sale_details()
    {
        return $this->hasMany(ReturnSaleDetails::class,'return_sale_id', 'id');
    }


    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}

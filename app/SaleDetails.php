<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaleDetails extends Model
{
    //
    protected $table ='sale_details';
    protected $guarded = [];

    public function product()
    {
     return $this->belongsTo(Product::class);
    }

    public function sale()
    {
     return $this->belongsTo(Sale::class,'sale_id', 'id');
    }
}

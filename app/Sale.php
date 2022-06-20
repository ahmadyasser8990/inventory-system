<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table ='sales';
    protected $guarded = [];


    public function sale_details()
    {
        return $this->hasMany(SaleDetails::class,'sale_id', 'id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}

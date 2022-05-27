<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReturnSecureBondDetail extends Model
{
    protected $table ='return_secure_bond_details';
    protected $guarded = [];

    public function product()
    {
     return $this->belongsTo(Product::class);
    }

    public function return_secure_bond()
    {
     return $this->belongsTo(ReturnSecureBond::class,'return_secure_bond_id', 'id');
    }
}

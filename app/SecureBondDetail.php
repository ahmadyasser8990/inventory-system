<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SecureBondDetail extends Model
{
    protected $table ='secure_bond_details';
    protected $guarded = [];

    public function product()
    {
     return $this->belongsTo(Product::class);
    }

    public function secure_bond()
    {
     return $this->belongsTo(SecureBond::class,'secure_bond_id', 'id');
    }
}

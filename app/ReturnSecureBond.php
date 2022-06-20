<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReturnSecureBond extends Model
{
    protected $table ='return_secure_bonds';
    protected $guarded = [];

    public function return_secure_bond_details()
    {
        return $this->hasMany(ReturnSecureBondDetail::class,'return_secure_bond_id', 'id');
    }


    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SecureBond extends Model
{
    protected $table ='secure_bonds';
    protected $guarded = [];


    public function secure_bond_details()
    {
        return $this->hasMany(SecureBondDetail::class,'secure_bond_id', 'id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}

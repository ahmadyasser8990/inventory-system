<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    protected $guarded = [];


    public function getNameAttribute($value)
    {
        return ucfirst($value);
    } // end of name to make first letter upper case

    public function products()
    {
        return $this->hasMany(Product::class);

    }//end of products
}

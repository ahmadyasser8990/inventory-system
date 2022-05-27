<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $guarded = [];


    public function getNameAttribute($value)
    {
        return ucfirst($value);
    } // end of name to make first letter upper case

    public function orders()
    {
        return $this->hasMany(Sale::class);
    }
}

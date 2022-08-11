<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EchangeBond extends Model
{
    protected $table ='exchange_bonds';
    protected $guarded = [];


    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

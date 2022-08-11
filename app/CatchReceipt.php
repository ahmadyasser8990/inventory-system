<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatchReceipt extends Model
{
    protected $table ='catch_receipts';
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

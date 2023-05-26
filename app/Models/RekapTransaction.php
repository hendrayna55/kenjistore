<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RekapTransaction extends Model
{
    protected $guarded = ['id'];

    public function transactions()
    {
        return $this->belongsTo(Transaction::class,'id','transaction_id');
    }
}

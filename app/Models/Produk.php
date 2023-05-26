<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $guarded = ['id'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class,'id','kategori_id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class,'id','transaction_id');
    }
}

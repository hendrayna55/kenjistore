<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $guarded = ['id'];

    public function users()
    {
        return $this->belongsTo(User::class,'id','user_id');
    }

    public function produks()
    {
        return $this->belongsTo(Produk::class,'id','produk_id');
    }

    public function rekaps()
    {
        return $this->hasMany(RekapTransaction::class,'id');
    }
}

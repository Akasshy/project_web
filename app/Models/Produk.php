<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $guarded = [];
    // public function factory()
    // {
    //     // Logika untuk method factory()
    //     // Misalnya, untuk membuat instance baru:
    //     return new Produk();
    // }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_produk');
    }
    
}

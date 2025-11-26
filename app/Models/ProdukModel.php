<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukModel extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $fillable = [
        'id',
        'kode_produk',
        'nama_produk',
        'harga',
        'deskripsi',
        'created_at',
        'updated_at'
    ];
}

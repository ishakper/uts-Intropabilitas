<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    // Menentukan kolom yang bisa diisi secara massal
    protected $fillable = ['judul', 'penulis', 'harga', 'stok', 'kategori_id'];
}

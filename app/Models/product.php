<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public $table = "product";

    protected $fillable = [
        'nama_product', 'deskripsi', 'harga', 'gambar'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_design',
        'deskripsi',
        'harga',
        'code_design',
        'pembuat_design',
        'gambar'
    ];
}

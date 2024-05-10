<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;


class Produk extends Model
{
    use HasFactory;

    protected $table = 'tb_produk'; // Menentukan nama tabel yang sesuai

    protected $guarded = ['id'];
}


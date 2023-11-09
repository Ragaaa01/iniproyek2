<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outdoor extends Model
{
    protected $table = 'outdoors';
    protected $fillable = ['id', 'nama_barang', 'slug'];
}

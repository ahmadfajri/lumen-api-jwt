<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
    use HasFactory;

    protected $table = 'catalogue';

    protected $fillable = [
        'kd_product', 'nama_product', 'harga_product', 'slug', 'created_at', 'updated_at',
    ];
}

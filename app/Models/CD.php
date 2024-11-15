<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CD extends Model
{
    use HasFactory;

    protected $table = 'cds'; // Tambahkan ini

    protected $fillable = [
        'title',
        'artist',
        'genre',
        'price',
        'stock',
    ];
}

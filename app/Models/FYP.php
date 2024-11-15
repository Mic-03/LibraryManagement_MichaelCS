<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FYP extends Model
{
    use HasFactory;

    protected $table = 'fyps'; // Tambahkan ini

    protected $fillable = [
        'title',
        'author',
        'year',
        'department',
    ];
}

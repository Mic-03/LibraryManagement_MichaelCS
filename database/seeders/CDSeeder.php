<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CD;

class CDSeeder extends Seeder
{
    public function run()
    {
        CD::create([
            'title' => 'Top Hits 2023',
            'artist' => 'Various Artists',
            'genre' => 'Pop',
            'price' => 120000,
            'stock' => 50
        ]);
    }
}

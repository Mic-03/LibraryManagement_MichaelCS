<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FYP;

class FYPSeeder extends Seeder
{
    public function run()
    {
        FYP::create([
            'title' => 'AI in Agriculture',
            'author' => 'John Doe',
            'year' => 2022,
            'department' => 'Computer Science'
        ]);
    }
}

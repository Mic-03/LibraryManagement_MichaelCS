<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Newspaper;

class NewspaperSeeder extends Seeder
{
    public function run()
    {
        Newspaper::create([
            'title' => 'Daily News',
            'publication_date' => '2023-01-15',
            'publisher' => 'The Daily Press'
        ]);
    }
}

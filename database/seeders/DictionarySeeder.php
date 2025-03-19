<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DictionarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dictionary')->insert([
            ['word' => 'Слово Вторник', 'image_url' => '/img/answers/VTORNIK.png'],
            
            
            
        ]);
    }
}

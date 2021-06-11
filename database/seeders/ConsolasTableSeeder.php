<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsolasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('consolas')->insert([
            [
                'nombre' => 'Playstation 4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Xbox One',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Nintendo Switch',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

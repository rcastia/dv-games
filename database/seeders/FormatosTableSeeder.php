<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formatos')->insert([
            [
                'tipo' => 'Físico',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tipo' => 'Digital',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

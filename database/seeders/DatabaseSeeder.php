<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ConsolasTableSeeder::class);
        $this->call(FormatosTableSeeder::class);
        $this->call(JuegosTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}

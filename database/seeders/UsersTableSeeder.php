<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Roberto',
                'surname' => 'Castia',
                'username' => 'roberto',
                'password' => Hash::make('admin'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Leandro',
                'surname' => 'Gomez',
                'username' => 'lean',
                'password' => Hash::make('secret'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Santiago',
                'surname' => 'Gallino',
                'username' => 'sgallino',
                'password' => Hash::make('gallino'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Federico',
                'surname' => 'Noto',
                'username' => 'fedenoto',
                'password' => Hash::make('noto'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Lionel',
                'surname' => 'Messi',
                'username' => 'messi (?',
                'password' => Hash::make('messi'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

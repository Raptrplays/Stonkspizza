<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Manager Account
        DB::table('users')->insert([
            'name' => 'Manager1',
            'email' => 'manager1@gmail.com',
            'password' => Hash::make('Manager12345@'),
        ]);

        // Medewerker Account
        DB::table('users')->insert([
            'name' => 'Medewerker1',
            'email' => 'medewerkeremail@gmail.com',
            'password' => Hash::make('Medewerker12345@'),
        ]);

        // Klant Account
        DB::table('users')->insert([
            'name' => 'Klant1',
            'email' => 'klant1@gmail.com',
            'password' => Hash::make('Klant12345@'),
        ]);
    }
}

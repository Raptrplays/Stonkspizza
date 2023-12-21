<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Gebruikers_Rechten_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Klant1
        $userId = DB::table('users')->where('name', 'Klant1')->value('id');
        $roleId = DB::table('rechten')->where('name', 'klant')->value('id');
        DB::table('gebruikers_rechten')->insert([
            'user_id'    => $userId,
            'role_id'    => $roleId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //Medewerker1
        $userId = DB::table('users')->where('name', 'Medewerker1')->value('id');
        $roleId = DB::table('rechten')->where('name', 'medewerker')->value('id');

        DB::table('gebruikers_rechten')->insert([
            'user_id'    => $userId,
            'role_id'    => $roleId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //Manager1
        $userId = DB::table('users')->where('name', 'Manager1')->value('id');
        $roleId = DB::table('rechten')->where('name', 'manager')->value('id');
        DB::table('gebruikers_rechten')->insert([
            'user_id'    => $userId,
            'role_id'    => $roleId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

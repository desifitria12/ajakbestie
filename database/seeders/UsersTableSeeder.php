<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@gmail.com',
                'email_verified_at' => now(),
                'role' => 'superadmin',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        DB::table('users')->insert(
            [
                'name' => 'Azvadennys Vasiguhamiaz',
                'email' => 'azvadenis@gmail.com',
                'email_verified_at' => now(),
                'role' => 'admin',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        DB::table('users')->insert(
            [
                'id' => 3,
                'name' => 'Biro',
                'email' => 'biro@gmail.com',
                'email_verified_at' => now(),
                'role' => 'user',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        DB::table('users')->insert(
            [
                'id' => 4,
                'name' => 'OPD',
                'email' => 'opd@gmail.com',
                'email_verified_at' => now(),
                'role' => 'user',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
    }
}

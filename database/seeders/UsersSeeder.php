<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('users')->upsert([
           ['name' => 'Admin User',
           'email' => 'admin@email.com',
           'gender' => 'male',
           'password' => Hash::make('password'),
           'created_at' => now(),
           'updated_at' => now(),
           ],
       ], ['email'], ['name', 'password', 'updated_at']);
    }
}

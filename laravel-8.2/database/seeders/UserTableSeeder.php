<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'test@gmail.com',
            'password' => Hash::make('rootroot42'),
            'role' => 'admin',
        ]);
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'test1@gmail.com',
            'password' => Hash::make('rootroot42'),
            'role' => 'user',
        ]);
    }
}

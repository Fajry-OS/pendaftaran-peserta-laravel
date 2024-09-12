<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id_level' => '1',
            'nama_lengkap' => 'Administrator',
            'email' => 'administrator@gmail.com',
            'password' => Hash::make('12345678')
        ]);
    }
}

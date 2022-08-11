<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('users')->insert([
            [
                'nama' => 'vernanda',
                'nohp' => '6289660741134',
                'sex' => 'm',
                'tgl_lahir' => '19990906',
                'email' => 'vernandaspw@gmail.com',
                'password' => Hash::make('Merpati341'),
                'role' => 'superadmin',
                'isaktif' => true
            ],
            [
                'nama' => 'doni',
                'nohp' => '6282282998204',
                'sex' => 'm',
                'tgl_lahir' => null,
                'email' => 'saputra12345doni@gmail.com',
                'password' => null,
                'role' => 'admin',
                'isaktif' => true
            ]
        ]);
    }
}

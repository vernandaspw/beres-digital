<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetodePembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('metode_pembayarans')->insert([
            [
                'id' => 1,
                'metode' => 'manual',
                'nama' => 'transfer bank',
                'fee' => 0,
                'istersedia' => true
            ],
            [
                'id' => 2,
                'metode' => 'manual',
                'nama' => 'e-wallet',
                'fee' => 0,
                'istersedia' => true
            ],
            [
                'id' => 3,
                'metode' => 'automatis',
                'nama' => null,
                'fee' => 0,
                'istersedia' => false
            ]

        ]);

    }
}

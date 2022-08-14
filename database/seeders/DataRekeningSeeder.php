<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataRekeningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_rekenings')->insert([
            [
                'metode_pembayaran_id' => 1,
                'nama_bank' => 'BRI',
                'atas_nama' => 'vernanda septia wanandi',
                'nomor_rek' => '578701015371534',
                'istersedia' => true
            ],
            [
                'metode_pembayaran_id' => 2,
                'nama_bank' => 'dana',
                'atas_nama' => 'vernanda septia wanandi',
                'nomor_rek' => '089660741134',
                'istersedia' => true
            ],
        ]);
    }
}

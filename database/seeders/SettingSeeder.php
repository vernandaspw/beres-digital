<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            
                'hero_title' => null,
                'hero_body' => null,
                'tentang_title' => null,
                'tentang_body' => null,
                'visi' => null,
                'misi' => null,
                'pajak' => '5',
        
          
        ]);
    }
}

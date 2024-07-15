<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DashboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dashboard')->insert([
            'nama'=>'Ananta Bora Masariku',
            'nomor_induk'=>'231210036',
            'alamat'=>'Yogyakarta',
            'created_at'=>date('Y-m-d H:i:s')
            ]
        );
        DB::table('dashboard')->insert([
            'nama'=>'asep',
            'nomor_induk'=>'231210037',
            'alamat'=>'Yogyakarta',
            'created_at'=>date('Y-m-d H:i:s')
            ]
        );
        DB::table('dashboard')->insert([
            'nama'=>'joko kendil',
            'nomor_induk'=> '231210038',
            'alamat' => 'Yogyakarta',
            'created_at' => date ('Y-m-d H:i:s')
            ]
        );
    }
}

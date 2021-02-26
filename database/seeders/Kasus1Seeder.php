<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class Kasus1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kasus1s')->insert([
            ['jumlah_positif' => "1000", 'jumlah_sembuh' => "900", 'jumlah_meninggal' => "100", 'tanggal' => 2021-02-12]
        ]);
    }
}

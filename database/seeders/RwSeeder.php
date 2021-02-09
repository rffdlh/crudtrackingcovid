<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RwSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rws')->insert([
            ['id_kelurahan' => 1, 'rw' => "01"],
            ['id_kelurahan' => 1, 'rw' => "02"],
            ['id_kelurahan' => 1, 'rw' => "03"],
            ['id_kelurahan' => 1, 'rw' => "04"],
            ['id_kelurahan' => 1, 'rw' => "05"],
            ['id_kelurahan' => 2, 'rw' => "01"],
            ['id_kelurahan' => 2, 'rw' => "02"],
            ['id_kelurahan' => 2, 'rw' => "03"],
            ['id_kelurahan' => 2, 'rw' => "04"],
            ['id_kelurahan' => 2, 'rw' => "05"],
            ['id_kelurahan' => 3, 'rw' => "01"],
            ['id_kelurahan' => 3, 'rw' => "02"],
            ['id_kelurahan' => 3, 'rw' => "03"],
            ['id_kelurahan' => 3, 'rw' => "04"],
            ['id_kelurahan' => 3, 'rw' => "05"],
            ['id_kelurahan' => 4, 'rw' => "01"],
            ['id_kelurahan' => 4, 'rw' => "02"],
            ['id_kelurahan' => 4, 'rw' => "03"],
            ['id_kelurahan' => 4, 'rw' => "04"],
            ['id_kelurahan' => 4, 'rw' => "05"],
            ['id_kelurahan' => 5, 'rw' => "01"],
            ['id_kelurahan' => 5, 'rw' => "02"],
            ['id_kelurahan' => 5, 'rw' => "03"],
            ['id_kelurahan' => 5, 'rw' => "04"],
            ['id_kelurahan' => 5, 'rw' => "05"]
            // ['id_kelurahan' => 6, 'rw' => ""],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mapel = [
            ['mapel' => 'Calistung',],
            ['mapel' => 'Bahasa Inggris',],
            ['mapel' => 'Semua Mata Pelajaran',],
            ['mapel' => 'Bahasa Inggris dan Matematika',],
        ];

        DB::table('mapels')->insert($mapel);
    }
}

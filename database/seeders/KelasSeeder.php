<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = [
            ['name' => 'TK',],
            ['name' => 'SD Kelas 1',],
            ['name' => 'SD Kelas 2',],
            ['name' => 'SD Kelas 3',],
            ['name' => 'SD Kelas 4',],
            ['name' => 'SD Kelas 5',],
            ['name' => 'SD Kelas 6',],
            ['name' => 'SMP Kelas 7',],
            ['name' => 'SMP Kelas 8',],
            ['name' => 'SMP Kelas 9',],
        ];

        DB::table('kelas')->insert($kelas);
    }
}

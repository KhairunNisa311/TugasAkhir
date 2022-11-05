<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kelas::create([
            'name' => 'TK',
            'harga' => '25000',
        ]);

        Kelas::create([
            'name' => 'SD Kelas 1',
            'harga' => '40000',
        ]);

        Kelas::create([
            'name' => 'SD Kelas 2',
            'harga' => '40000',
        ]);
        
        Kelas::create([
            'name' => 'SD Kelas 3',
            'harga' => '40000',
        ]);
        
        Kelas::create([
            'name' => 'SD Kelas 4',
            'harga' => '40000',
        ]);
        
        Kelas::create([
            'name' => 'SD Kelas 5',
            'harga' => '40000',
        ]);
        
        Kelas::create([
            'name' => 'SD Kelas 6',
            'harga' => '40000',
        ]);

        Kelas::create([
            'name' => 'SMP Kelas 7',
            'harga' => '50000',
        ]);

        Kelas::create([
            'name' => 'SMP Kelas 8',
            'harga' => '50000',
        ]);

        Kelas::create([
            'name' => 'SMP Kelas 9',
            'harga' => '50000',
        ]);
    }
}

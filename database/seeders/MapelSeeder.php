<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mapel;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mapel::create([
            'mapel' => 'Calistung',
            'kelas_id' => '1',
            'harga' => '100000',
        ]);

        Mapel::create([
            'mapel' => 'Calistung',
            'kelas_id' => '1',
            'harga' => '25000',
        ]);

        Mapel::create([
            'mapel' => 'Matematika',
            'kelas_id' => '2',
            'harga' => '55000',
        ]);

        Mapel::create([
            'mapel' => 'Bahasa Inggris',
            'kelas_id' => '2',
            'harga' => '25000',
        ]);

        Mapel::create([
            'mapel' => 'Matematika',
            'kelas_id' => '3',
            'harga' => '55000',
        ]);

        Mapel::create([
            'mapel' => 'Bahasa Inggris',
            'kelas_id' => '3',
            'harga' => '25000',
        ]);

        Mapel::create([
            'mapel' => 'Matematika',
            'kelas_id' => '4',
            'harga' => '55000',
        ]);

        Mapel::create([
            'mapel' => 'Bahasa Inggris',
            'kelas_id' => '4',
            'harga' => '25000',
        ]);

        Mapel::create([
            'mapel' => 'Matematika',
            'kelas_id' => '5',
            'harga' => '55000',
        ]);

        Mapel::create([
            'mapel' => 'Bahasa Inggris',
            'kelas_id' => '5',
            'harga' => '25000',
        ]);

        Mapel::create([
            'mapel' => 'Matematika',
            'kelas_id' => '6',
            'harga' => '55000',
        ]);

        Mapel::create([
            'mapel' => 'Bahasa Inggris',
            'kelas_id' => '6',
            'harga' => '25000',
        ]);

        Mapel::create([
            'mapel' => 'Matematika',
            'kelas_id' => '7',
            'harga' => '55000',
        ]);

        Mapel::create([
            'mapel' => 'Bahasa Inggris',
            'kelas_id' => '7',
            'harga' => '25000',
        ]);

        Mapel::create([
            'mapel' => 'Matematika',
            'kelas_id' => '8',
            'harga' => '55000',
        ]);

        Mapel::create([
            'mapel' => 'Bahasa Inggris',
            'kelas_id' => '8',
            'harga' => '25000',
        ]);

        Mapel::create([
            'mapel' => 'Matematika',
            'kelas_id' => '9',
            'harga' => '55000',
        ]);

        Mapel::create([
            'mapel' => 'Bahasa Inggris',
            'kelas_id' => '9',
            'harga' => '25000',
        ]);

        Mapel::create([
            'mapel' => 'Matematika',
            'kelas_id' => '10',
            'harga' => '55000',
        ]);

        Mapel::create([
            'mapel' => 'Bahasa Inggris',
            'kelas_id' => '10',
            'harga' => '25000',
        ]);
    }
}

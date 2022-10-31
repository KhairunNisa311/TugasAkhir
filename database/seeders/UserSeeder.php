<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '082232313626',
            'role' => 'admin',
            'verify' => '1',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'Tzelginia',
            'email' => 'tzelginianc@gmail.com',
            'phone' => '082231464030',
            'role' => 'member',
            'verify' => '1',
            'password' => bcrypt('password')
        ]);
    }
}

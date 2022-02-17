<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'root user',
            'email' => 'root@root.com',
            'password' => Hash::make('toor1234'),
            'wheight' => '70',
            'birthDate' => '26/12/2002',
            'physics' => 'mesomorph',
            'gender' => 'm',
            'personal' => true
        ]);
    }
}

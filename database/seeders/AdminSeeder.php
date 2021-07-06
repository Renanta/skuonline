<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'name' => 'admin',
            'ntag' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('admin123'), //password
            'role' => 2 //admin
        ], [
            'name' => 'Renanta',
            'ntag' => '192.101.002',
            'email' => 'renantacentris25@gmail.com',
            'password' => bcrypt('12121212'), //password
            'role' => 1 //admin
        ]];

        User::insert($data);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return voidn
     */
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            PoinSeeder::class,
            ReligionSeeder::class,
            SubpoinSeeder::class
        ]);
    }
}

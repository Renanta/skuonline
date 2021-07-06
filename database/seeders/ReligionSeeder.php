<?php

namespace Database\Seeders;

use App\Models\Religion;
use Illuminate\Database\Seeder;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            [
                'name' => 'Ateis'
            ],
            [
                'name' => 'Islam',
            ],
            [
                'name' => 'Hindu'
            ],
            [
                'name' => 'Kristen Protestan'
            ],
            [
                'name' => 'Kristen Katholik'
            ],
            [
                'name' => 'Budha'
            ]
        ];

        Religion::insert($data);
    }
}

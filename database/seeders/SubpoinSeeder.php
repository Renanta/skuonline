<?php

namespace Database\Seeders;

use App\Models\Subpoin;
use Illuminate\Database\Seeder;

class SubpoinSeeder extends Seeder
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
                'poin_id' => '1',
                'subPoin' => '1',
                'slug' => '1',
                'desc' => 'Menyebutkan dan menjelaskan serta memberikan contoh Rukun Iman'
            ],
            [
                'poin_id' => '1',
                'subPoin' => '2',
                'slug' => '1',
                'desc' => 'Menyebutkan dan menjelaskan serta memberikan contoh Rukun Islam'
            ]
        ];

        Subpoin::insert($data);
    }
}

<?php

use App\AssetStatus;
use Illuminate\Database\Seeder;

class AssetStatusTableSeeder extends Seeder
{
    public function run()
    {
        $assetStatuses = [
            [
                'id'         => '1',
                'name'       => 'Available',
                'created_at' => '2020-07-03 18:07:30',
                'updated_at' => '2020-07-03 18:07:30',
            ],
            [
                'id'         => '2',
                'name'       => 'Not Available',
                'created_at' => '2020-07-03 18:07:30',
                'updated_at' => '2020-07-03 18:07:30',
            ],
            [
                'id'         => '3',
                'name'       => 'Broken',
                'created_at' => '2020-07-03 18:07:30',
                'updated_at' => '2020-07-03 18:07:30',
            ],
            [
                'id'         => '4',
                'name'       => 'Out for Repair',
                'created_at' => '2020-07-03 18:07:30',
                'updated_at' => '2020-07-03 18:07:30',
            ],
        ];

        AssetStatus::insert($assetStatuses);
    }
}
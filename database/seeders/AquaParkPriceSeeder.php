<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AquaParkPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('price')->insert([
            [
                'id' => '1',
                'description' => '2',
                'child_ticket_title' => '3',
                'time_hour_child' => '4',
                'time_hour_price_child' => 1000,
                'time_day_child' => '5',
                'time_day_price_child' => 1000,
                'spa_child' => '6',
                'spa_child_price' => 1000,
                'adult_ticket_title' => '7',
                'time_hour_adult' => '8',
                'time_hour_price_adult' => 1000,
                'time_day_adult' => '9',
                'time_day_price_adult' => 1000,      
                'spa_adult' => '10',
                'spa_adult_price' => 1000,
            ],
    ]);
    }
}
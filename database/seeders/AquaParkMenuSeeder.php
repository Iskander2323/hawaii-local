<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AquaParkMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
            [
                'id' => '1',
                'description' => '11',
                'open_menu' => '12',
                'open_menu_florida' => '13',
                'open_menu_aloha' => '14',
            ],
    ]);
    }
}
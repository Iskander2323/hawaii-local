<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SitePolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rules')->insert([
            [
                'id' => '1',
                'title' => '24',
                'description' => '25',
                //'file_ru' => 'smth',
                //'file_kz' => 'smth',
            ],
        ]);
    
        DB::table('payment')->insert([
            [
                'id' => '2',
                'title' => '26',
                'description' => '27',
                //'file_ru' => 'smth',
                //'file_kz' => 'smth',
            ],
        ]);
        DB::table('dataproc')->insert([
            [
                'id' => '3',
                'title' => '28',
                'description' => '29',
                //'file_ru' => 'smth',
                //'file_kz' => 'smth',
            ],
         ]);
    }
}
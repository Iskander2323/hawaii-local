<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footer')->insert([
            [
                'id' => '1',
                'title' => '16',
                'description' => '17',
            ],
            [
                'id' => '2',
                'title' => '18',
                'description' => '19',
            ],
            [
                'id' => '3',
                'title' => '20',
                'description' => '21',
            ],
            [
                'id' => '4',
                'title' => '22',
                'description' => '23',
            ],
    ]);
    }
}
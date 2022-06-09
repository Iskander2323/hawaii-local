<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaywusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staywus')->insert([
            [
                'id' => '1',
                'servis' => 'service@gmail.com',
                'market' => 'marketing@gmail.com',
                'num1' => '87005002010',
                'num2' => '87007005010',
            ],
    ]);
    }
}
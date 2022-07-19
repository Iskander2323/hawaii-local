<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('section')->insert([
            [
                'name' => 'AquaparkInfoMain',
            ],
            [
                'name' => 'AquaparkGallery',
            ],
            [
                'name' => 'SpaInfoMain',
            ],
            [
                'name' => 'SpaGallery',
            ],
    ]);
    }
}
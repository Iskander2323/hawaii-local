<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            [
                'id' => '1',
                'rns' => '87006001020',
                'spa' => '87004003010',
                'hr1' => '87005002010',
                'hr2' => '87007005010',
            ],
    ]);
    }
}
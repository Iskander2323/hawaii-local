<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => '1',
                'name' => 'Admin',
                'phone_number' => '87475002010',
                'email' => 'admin@mail.com',
                'password' => '$2a$12$JZ1w7ndIq1.1eG5jsDd26OkN7Zr5prYeZ580EOqwlRj3zgPX/oWMq',
            ],
    ]);
    }
}
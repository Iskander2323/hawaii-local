<?php

namespace Database\Seeders;

use App\Models\SpaInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TranslateSeeder::class,
            RolesTableSeeder::class,
            AquaParkInfoSeeder::class,
            AquaParkMenuSeeder::class,
            AquaParkPriceSeeder::class,
            SpaInfoSeeder::class,
            FooterSeeder::class,
            StaywusSeeder::class,
            ContactsSeeder::class,
            UserSeeder::class,
            UserRolesSeeder::class,
            SitePolicySeeder::class,
        ]);
    }
}
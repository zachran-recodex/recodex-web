<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AboutSeeder::class,
            FaqSeeder::class,
            ServiceSeeder::class,
            WorkProcessSeeder::class,
            HeroSeeder::class,
        ]);
    }
}

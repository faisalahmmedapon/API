<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
         \App\Models\Drug::factory(10)->create();
         \App\Models\Product::factory(200)->create();




        $this->call([
            AdminSeeder::class,
            UserSeeder::class,
            PlanSeeder::class,
        ]);
        $this->call([
            VendorSeeder::class,
        ]);
    }
}

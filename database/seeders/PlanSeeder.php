<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $plans = array(
            [
                'title' => 'What is Lorem Ipsum 10?',
                'description' => 'simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type',
                'price' => 10,
                'commission' => 1,
            ], [
                'title' => 'What is Lorem Ipsum 20?',
                'description' => 'simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type',
                'price' => 20,
                'commission' => 2,
            ], [
                'title' => 'What is Lorem Ipsum 30?',
                'description' => 'simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type',
                'price' => 30,
                'commission' => 3,
            ], [
                'title' => 'What is Lorem Ipsum 40?',
                'description' => 'simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type',
                'price' => 40,
                'commission' => 4,
            ], [
                'title' => 'What is Lorem Ipsum 50?',
                'description' => 'simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type',
                'price' => 50,
                'commission' => 5,
            ], [
                'title' => 'What is Lorem Ipsum 60?',
                'description' => 'simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type',
                'price' => 60,
                'commission' => 6,
            ], [
                'title' => 'What is Lorem Ipsum 70?',
                'description' => 'simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type',
                'price' => 70,
                'commission' => 7,
            ], [
                'title' => 'What is Lorem Ipsum 80?',
                'description' => 'simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type',
                'price' => 80,
                'commission' => 8,
            ], [
                'title' => 'What is Lorem Ipsum 90?',
                'description' => 'simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type',
                'price' => 90,
                'commission' => 9,
            ], [
                'title' => 'What is Lorem Ipsum 100?',
                'description' => 'simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type',
                'price' => 100,
                'commission' => 10,
            ],
        );

        foreach ($plans as $plan){
            Plan::updateOrCreate($plan);
        }
    }
}

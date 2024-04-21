<?php

namespace Database\Seeders;
use App\Models\Car;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Car::factory(20)->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Car::factory()->create([
            'Car_Name' => 'AudiR8',
            'Brand_Name' => 'Audi',
            'Launched_Year' => '2015',
            'ImageURL' => 'https://cdn.motor1.com/images/mgl/VzM4p7/s1/audi-r8-japan-final-edition.jpg',
        ]);

        Car::factory()->create([
            'Car_Name' => 'Mercedes-class-S',
            'Brand_Name' => 'Mercedes',
            'Launched_Year' => '1008',
            'ImageURL' => 'https://hips.hearstapps.com/hmg-prod/images/2022-mercedes-benz-s500-4matic-109-1642184016.jpg?crop=0.591xw:0.665xh;0.137xw,0.274xh&resize=768:*',
        ]);
    }
}

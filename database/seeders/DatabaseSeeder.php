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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $now = Carbon::now();

        $faker = Faker::create();

        $people = array();

        for ($i = 0; $i < 200; $i++) {
            $people[] = [
                'surname' =>$faker->lastName,
                'name' => $faker->firstName,
                'second name' => $faker->secondName,
                'age' => $faker->age,
                'country' => $faker->country,
                'city' => $faker->city,
                'street' => $faker->streetName,
                'house number' => $faker->houseNumber,
                'phone number' => $faker->phoneNumber,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }
        DB::table('people')->insert($people);
    }
}

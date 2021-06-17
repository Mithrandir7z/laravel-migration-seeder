<?php

use Illuminate\Database\Seeder;

use App\Trip;

use Faker\Generator as Faker;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i <10; $i++) {
            $new_trip = new Trip();
            $new_trip->name = $faker->city();
            $new_trip->price = $faker->numberBetween(2, 30000, 50000000);
            $new_trip->save();
        }
    }
}

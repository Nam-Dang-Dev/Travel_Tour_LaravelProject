<?php

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
      $this->call(categorySeeder::class);
      $this->call(userSeeder::class);
      $this->call(flightSeeder::class);
      $this->call(priceSeeder::class);

      $this->call(tourSeeder::class);

      $this->call(placeSeeder::class);
      $this->call(tour_placeSeeder::class);
      $this->call(hotelSeeder::class);
      $this->call(tour_hotelSeeder::class);
    }
  }

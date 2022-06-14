<?php

use Illuminate\Database\Seeder;
/* Import del mio seeder (HotelTableSeeder) */
use HotelTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /* Questo va attivato anche col nome del seeder creato */
        $this->call(HotelTableSeeder::class);
    }
}

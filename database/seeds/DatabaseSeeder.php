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
        $this->call(CatastrophesTableSeeder::class);
        $this->call(SectorsTableSeeder::class);
        $this->call(DonationTypesSeeder::class);

        // $this->call(UsersTableSeeder::class);
    }
}

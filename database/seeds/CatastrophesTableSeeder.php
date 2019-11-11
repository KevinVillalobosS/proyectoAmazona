<?php

use Illuminate\Database\Seeder;

class CatastrophesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Catastrophe', 10)->create();
    }
}

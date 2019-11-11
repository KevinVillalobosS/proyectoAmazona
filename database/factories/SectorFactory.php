<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sector;
use Faker\Generator as Faker;

$factory->define(Sector::class, function (Faker $faker) {
    $catastrophe = DB::table('catastrophes')->select('catastrophe_id')->get();
    return [
        'catastrophe_id'=>$catastrophe->random()->catastrophe_id,
        'sector_name'=>$faker->randomElement(['Sector 1','Sector 2','Sector 3','Sector 4','Sector 5','Sector 6','Sector 7','Sector 8']),
        'zone'=>$faker->randomElement(['(2,5),10','(3,6),4','(8,11),1','(0,0),7','(20,-10),25']),
        'country'=>$faker->city,
        'details'=>$faker->randomElement(['Plaza central','Cercano a colegio','Cercano a planta electrica','Colegio','Zona residencial','Zona sin habitantes','Lugar abandonado']),
            //
    ];
});

/*
  $table->bigIncrements('id');
            $table->integer('catastrophe_id');
            $table->string('sector_name',15)->unique();
            $table->string('zone',15);
            $table->string('country',20);
            $table->string('details',255);
            */

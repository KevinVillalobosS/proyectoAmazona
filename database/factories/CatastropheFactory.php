<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Catastrophe;
use Faker\Generator as Faker;

$factory->define(Catastrophe::class, function (Faker $faker) {

    return [
        'catastrophe_name'=>$faker->company,
        'status'=>$faker->randomElement(['Activa','Inactiva']),
        'description'=>$faker->randomElement(['Incendio en la ciudad','Tsunami en el pais','Terremoto','Incendio','Tsunami','Tornado','Inundacion','Erupción de volcan','Avalancha']),
        'date'=>$faker->randomElement(['25/06/2010','26/03/2019','25/10/2011','05/11/2019','11/12/2013','01/01/2000','27/02/2010','06/06/2006','12/12/2012'])
        //
    ];
});

/*

   $table->string('catastrophe_name',64)->unique();
            $table->string('status',15);
            $table->string('description',255);
            $table->string('date',15);

    */
<?php

use Illuminate\Database\Seeder;

class DonationTypesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('donation_types')->insert([
            'donation_type_name' => 'Reforestacion',
            'donation_type_description' => 'Considera toda la ayuda forestal',
        ]);

        DB::table('donation_types')->insert([
            'donation_type_name' => 'Ayuda Humanitaria',
            'donation_type_description' => 'Considera toda la ayuda humanitaria',
        ]);

        DB::table('donation_types')->insert([
            'donation_type_name' => 'Ayuda Veterinaria',
            'donation_type_description' => 'Considera toda la ayuda para el cuidado de los animales',
        ]);

        DB::table('donation_types')->insert([
            'donation_type_name' => 'limpieza del terreno',
            'donation_type_description' => 'Considera toda la ayuda para la limpieza del terreno',
        ]);



        // $this->call(UsersTableSeeder::class);
    }
}

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
            'donation_type_name' => 'Ayudas generales',
            'donation_type_description' => 'Considera donaciones de tipo monetario, de vehiculos para transporte humano/animal/materiales, y otros elementos
            utiles para las catastrofes.',
        ]);

        DB::table('donation_types')->insert([
            'donation_type_name' => 'Ayuda humana',
            'donation_type_description' => 'Donaciones de alimento.',
        ]);

        DB::table('donation_types')->insert([
            'donation_type_name' => 'Limpieza del terreno',
            'donation_type_description' => 'Considera maquinarias para limpiar los restos carbonizados.',
        ]);

        DB::table('donation_types')->insert([
            'donation_type_name' => 'Tratamiento del terreno',
            'donation_type_description' => 'Considera fertilizantes, quimicos, tierra, etc. Necesario para hacer que el terreno sea fértil nuevamente.',
        ]);

        DB::table('donation_types')->insert([
            'donation_type_name' => 'Materiales de Reforestación',
            'donation_type_description' => 'Considera semillas y material de sembrado.',
        ]);

        DB::table('donation_types')->insert([
            'donation_type_name' => 'Ayuda Veterinaria',
            'donation_type_description' => 'Considera medicamentos y utensilios para ayudar a los animales sobrevivientes.',
        ]);

        // $this->call(UsersTableSeeder::class);
    }
}

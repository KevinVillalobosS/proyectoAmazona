<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('sector_id'); //sector asociado
            $table->string('vehicle_vin',25); //numero de chasis
            $table->string('vehicle_type',12); //Aereo, terrestre, acuatico
            $table->string('vehicle_name',50); //Global Super Tanker
            $table->string('vehicle_brand',30); //marca
            $table->string('vehicle_model',30); //modelo
            $table->integer('vehicle_year'); //año
            $table->string('vehicle_details',255);
            $table->string('vehicle_status',30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}

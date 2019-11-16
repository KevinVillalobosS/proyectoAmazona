<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('sector_id');
            $table->integer('type_id');
            $table->string('item_name',50);
            $table->integer('item_quantity');
            $table->string('description',255);
            $table->string('status',15);
            $table->string('due_date',13);
            $table->foreign('sector_id')->references('id')->on('sectors');
            $table->foreign('type_id')->references('id')->on('donation_types');
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
        Schema::dropIfExists('donations');
    }
}

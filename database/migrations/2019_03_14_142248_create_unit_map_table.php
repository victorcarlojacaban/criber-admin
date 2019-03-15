<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitMapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_map', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('location_id');
            $table->string('address_src', 500);
            $table->timestamps();
        });

        Schema::table('unit_map', function ($table) {
            $table->foreign('location_id')->references('id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unit_map');
    }
}

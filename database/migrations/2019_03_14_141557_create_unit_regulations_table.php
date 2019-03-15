<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitRegulationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_regulations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('location_id');
            $table->text('regulation_info');
            $table->timestamps();
        });

        Schema::table('unit_regulations', function ($table) {
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
        Schema::dropIfExists('unit_regulations');
    }
}

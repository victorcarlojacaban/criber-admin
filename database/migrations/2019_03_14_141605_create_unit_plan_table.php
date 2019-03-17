<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_plan', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('location_id');
            $table->string('payment_of_rent');
            $table->string('security_deposit');
            $table->timestamps();
        });

        Schema::table('unit_plan', function ($table) {
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
        Schema::dropIfExists('unit_plan');
    }
}

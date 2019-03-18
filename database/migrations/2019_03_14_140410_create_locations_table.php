<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('title');
            $table->string('complete_address', 500);
            $table->text('overview')->nullable();
            $table->json('unit_amenities')->nullable();
            $table->json('building_amenities')->nullable();
            $table->string('payment_of_rent')->nullable();
            $table->string('security_deposit')->nullable();
            $table->text('regulation_info')->nullable();
            $table->string('address_map_src', 500)->nullable();
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
        Schema::dropIfExists('locations');
    }
}

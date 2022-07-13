<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->id();
            $table->integer(1)->default(1);
            $table->string('street');
            $table->integer('number');
            $table->text('datails');
            $table->string('public_place');
            $table->string('cep');
            $table->string('city');
            $table->integer('city_id')->nullable();
            $table->string('state');
            $table->integer('state_id')->nullable();
            $table->integer('data_origin')->nullable();
            $table->bigInteger('user_id')->nullable();
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
        Schema::dropIfExists('address');
    }
}

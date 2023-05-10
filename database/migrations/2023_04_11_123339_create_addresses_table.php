<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cep', 10)->nullable(false);
            $table->string('street', 80)->nullable(true);
            $table->string('number', 10)->nullable(true);
            $table->string('neighborhood', 50)->nullable(true);
            $table->string('complement', 255)->nullable(true);
            $table->string('observation', 255)->nullable(true);
            $table->uuid('city_id');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
            Schema::create('people', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name',255)->nullable(false);
                $table->string('taxpayer',18)->unique()->nullable(false);
                $table->date('birthdate')->nullable(true);
                $table->string('rg_number',14)->unique()->nullable(true);
                $table->unsignedInteger("dispatcher_agency_id");
                $table->foreign('dispatcher_agency_id')->references('id')->on("dispatching_agencies");
                $table->text('observation')->nullable(true);
                $table->string('name_mother', 80);
                $table->string('name_father', 80);
                $table->string('naturalness', 70);
                $table->unsignedInteger('nationality_id');
                $table->date('expedition_date_rg')->nullable(true);
                $table->string("gender", 30);
                $table->integer('nationalities')->unsigned();
                $table->foreign('nationality_id')->references('id')->on('nationalities');
                $table->integer('schooling_id')->unsigned();
                $table->foreign('schooling_id')->references('id')->on('schooling');
                $table->integer('marital_status_id')->unsigned();
                $table->foreign('marital_status_id')->references('id')->on('marital_statuses');
                $table->integer('address_id')->unsigned();
                $table->foreign("address_id")->references('id')->on('addresses');
                $table->date('married_date')->nullable(true);
                $table->integer('profession_id')->unsigned();
                $table->foreign("profession_id")->references('id')->on('professions');
                $table->integer('work_status_id')->unsigned();
                $table->foreign("work_status_id")->references('id')->on('work_status');
                $table->boolean('has_social_benefits')->nullable(false);
                $table->boolean('has_deficiencies')->nullable(false);
                $table->boolean('has_chronic_diseases')->nullable(false);
                $table->boolean('has_absent_parner')->nullable(false);
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};

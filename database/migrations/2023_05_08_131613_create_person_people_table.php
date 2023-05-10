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
        Schema::create('person_people', function (Blueprint $table) {
            $table->id();
            $table->integer('person_chief_id');
            $table->unsignedInteger("people_id");
            $table->string('relation_description',60);
            $table->foreign("people_id")->references("id")->on("people");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('person_people');
    }
};

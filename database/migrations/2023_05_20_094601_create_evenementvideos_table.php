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
        Schema::create('evenementvideos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('evenement_id');
            $table->foreign('evenement_id')->references('id')->on('evenements')->onDelete('cascade');
            $table->string('title');
            $table->string('title_en');
            $table->string('video');
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
        Schema::dropIfExists('evenementvideos');
    }
};
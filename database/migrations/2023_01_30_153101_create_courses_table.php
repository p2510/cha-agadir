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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->integer('position');
            $table->string('name');
            $table->string('photo')->nullable();
            $table->foreignId('degree_id')->onDelete('cascade');
            $table->foreignId('modality_id')->onDelete('cascade');
            $table->foreignId('training_type_id')->onDelete('cascade');
            $table->text('description');
            $table->text('accroche');
            $table->integer('duration')->nullable();
            $table->foreignId('location_id')->onDelete('cascade');
            $table->foreignId('mode_id')->onDelete('cascade');
            $table->foreignId('language_id')->onDelete('cascade');
            $table->text('admission')->nullable();
            $table->text('dossier')->nullable();
            $table->text('candidature')->nullable();
            $table->dateTime('datelimite')->nullable();
            $table->text('selection')->nullable();
            $table->date('daterentre')->nullable();
            $table->string('grade')->nullable();
            $table->text('profile')->nullable();
            $table->text('opportunity')->nullable();
            $table->text('review')->nullable();
            $table->foreignId('responsable_id')->nullable();
            $table->string('form')->nullable();
            $table->string('brochure')->nullable();
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
        Schema::dropIfExists('courses');
    }
};
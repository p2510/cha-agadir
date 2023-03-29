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
        Schema::create('interesteds', function (Blueprint $table) {
            $table->id();
            $table->string('gender', 10);
            $table->string('name', 50);
            $table->string('surname', 100);
            $table->string('email');
            $table->string('country');
            $table->string('province');
            $table->string('level');
            $table->string('phone');
            $table->string('grade')->default('');
            $table->string('accepted');
            $table->foreignId("course_id");
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
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
        Schema::dropIfExists('interesteds');
    }
};
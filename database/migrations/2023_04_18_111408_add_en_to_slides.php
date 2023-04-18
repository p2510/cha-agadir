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
        Schema::table('slides', function (Blueprint $table) {
            $table->string('subject_en', 100)->nullable();
            $table->string('title_en', 100)->nullable();
            $table->text('description_en')->nullable();
            $table->string('photo_en')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('slides', function (Blueprint $table) {
            $table->dropColumn('subject_en');
            $table->dropColumn('title_en');
            $table->dropColumn('description_en');
            $table->dropColumn('photo_en');
        });
    }
};
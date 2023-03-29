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
        Schema::table('mediavideos', function (Blueprint $table) {
            $table->foreignId('category_video_id');
            $table->foreign('category_video_id')->references('id')->on('category_videos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mediavideos', function (Blueprint $table) {
            $table->dropColumn('category_video_id');
           
        });
    }
};
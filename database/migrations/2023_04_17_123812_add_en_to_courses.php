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
        Schema::table('courses', function (Blueprint $table) {
            $table->string('name_en');
            $table->text('description_en');
            $table->text('accroche_en');
            $table->text('admission_en')->nullable();
            $table->text('dossier_en')->nullable();
            $table->text('candidature_en')->nullable();
            $table->text('selection_en')->nullable();
            $table->string('grade_en')->nullable();
            $table->text('profile_en')->nullable();
            $table->text('opportunity_en')->nullable();
            $table->text('review_en')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('name_en');
            $table->dropColumn('description_en');
            $table->dropColumn('accroche_en');
            $table->dropColumn('admission_en');
            $table->dropColumn('dossier_en');
            $table->dropColumn('candidature_en');
            $table->dropColumn('selection_en');
            $table->dropColumn('grade_en');
            $table->dropColumn('profile_en');
            $table->dropColumn('opportunity_en');
            $table->dropColumn('review_en');
           
        });
    }
};
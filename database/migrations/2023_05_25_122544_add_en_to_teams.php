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
        Schema::table('teams', function (Blueprint $table) {
            $table->string('poste_en')->nullable();
            $table->text('competence_en')->nullable();
            $table->string('statut_en')->nullable();
            $table->string('departement_en')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->dropColumn('poste_en');
            $table->dropColumn('competence_en');
            $table->dropColumn('statut_en');
            $table->dropColumn('departement_en');
        });
    }
};
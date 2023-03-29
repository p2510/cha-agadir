<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $TrainingType = [
            'Formation Initiale',
            'Formation Exécutive',

        ];
        foreach ($TrainingType as $Training) {
            DB::table('training_types')->insert([
                'name' => $Training,

            ]);
        }

    }
}

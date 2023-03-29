<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurriculumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curricula = [
            'Bac + 1',
            'Bac + 2',
            'Bac + 3',
            'Bac + 4',
            'Bac + 5',
            'Bac + 6',
            'Bac + 7',
            'Bac + 8',
            'Bac + 9',
            'Formation Exécutive',


        ];
        foreach ($curricula as $curriculum) {
            DB::table('curricula')->insert([
                'name' => $curriculum,

            ]);
        }
    }
}

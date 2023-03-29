<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DegreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $degrees = [
            ['name'=> 'Ingénieur d\'État en Agronomie',
                'curriculum_id'=>'5',
                'training_type_id'=>'1'
            ],
            ['name'=> 'International Master',
                'curriculum_id'=>'5',
                'training_type_id'=>'1'
            ],
            ['name'=> 'Master',
                'curriculum_id'=>'5',
                'training_type_id'=>'1'
            ],
            ['name'=> 'Licence Professionnelle',
                'curriculum_id'=>'3',
                'training_type_id'=>'1'
            ],
            ['name'=> 'Technicien Spécialisé',
                'curriculum_id'=>'2',
                'training_type_id'=>'1'
            ],
            ['name'=> 'Formation Certifiante',
                'curriculum_id'=>'10',
                'training_type_id'=>'2'
            ],
            ['name'=> 'Formation Continue',
                'curriculum_id'=>'10',
                'training_type_id'=>'2'
            ],
            ['name'=> 'Formation',
                'curriculum_id'=>'1',
                'training_type_id'=>'2'
            ],



        ];
        foreach ($degrees as $degree) {
            DB::table('degrees')->insert([
                'name' => $degree['name'],
                'curriculum_id'=> $degree['curriculum_id'],
                'training_type_id'=>$degree['training_type_id']




            ]);
        }
    }
}

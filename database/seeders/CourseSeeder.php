<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            [
                'name'=> 'Horticulture',
                'degree_id'=>'1',
                'modality_id'=>'2',
                'description'=>'<div><strong>Description En Gras</strong></div>',
                'duration'=>'60',
                'location_id'=>'1',
                'mode_id'=>'1',
                'language_id'=>'1',
            ],

        ];
        foreach ($courses as $cours) {
            DB::table('courses')->insert([
                'name'=> $cours['name'],
                'degree_id'=>$cours['degree_id'],
                'modality_id'=>$cours['modality_id'],
                'description'=>$cours['description'],
                'duration'=>$cours['duration'],
                'location_id'=>$cours['location_id'],
                'mode_id'=>$cours['mode_id'],
                'language_id'=>$cours['language_id']

            ]);
        }
    }
}

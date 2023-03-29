<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modalities = [
            'En ligne',
            'Présentiel',
            'Présentiel et En ligne',


        ];
        foreach ($modalities as $modality) {
            DB::table('modalities')->insert([
                'name' => $modality,

            ]);
        }
    }
}

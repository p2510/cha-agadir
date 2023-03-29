<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = [
            'Complexe Horticole d\'Agadir',
            'Institut des Techniciens Spécialisés en Horticulture et Commercialisation d\'Ait Melloul',



        ];
        foreach ($locations as $location) {
            DB::table('locations')->insert([
                'name' => $location,

            ]);
        }
    }
}

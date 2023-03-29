<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modes = [
            'Plein temps',
            'Partiel',
            'Aménagé',
            'Week-end',

        ];
        foreach ($modes as $mode) {
            DB::table('modes')->insert([
                'name' => $mode,

            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimingModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timingMode = [
            'Plein temps',
            'Partiel',
            'Aménagé',
            'Week-end',

        ];
        foreach ($timingMode as $timingMode) {
            DB::table('timing_modes')->insert([
                'name' => $timingMode,

            ]);
        }
    }
}

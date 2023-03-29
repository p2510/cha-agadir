<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Nova\Category;
use Database\Factories\CategoryFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(2)->create();

         \App\Models\User::factory()->create([
             'name' => 'Amine',
             'email' => 'bouslamaamine@gmail.com',
             'password' => bcrypt('amine'),
         ]);
         
         \App\Models\User::factory()->create([
             'name' => 'Amine',
             'email' => 'samir.belghol@gmail.com',
             'password' => bcrypt('samir.belghol@gmail.com'),
         ]);
         
         




        $this->call([
            TrainingTypeSeeder::class,
            CurriculumSeeder::class,
            ModeSeeder::class,
            ModalitySeeder::class,
            LocationSeeder::class,
            DegreeSeeder::class,
            LanguageSeeder::class,
            CourseSeeder::class,

        ]);


    }
}

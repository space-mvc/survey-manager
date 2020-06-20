<?php

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
        $this->call(SurveysTableSeeder::class);
        $this->call(SurveySectionsTableSeeder::class);
        $this->call(SurveyCriteriaTableSeeder::class);
    }
}

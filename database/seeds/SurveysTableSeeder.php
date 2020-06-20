<?php

use Illuminate\Database\Seeder;

use \App\Model\Survey;

/**
 * Class SurveysTableSeeder
 */
class SurveysTableSeeder extends Seeder
{
    /** @var array $seeds */
    protected $seeds = [
        [
            'name' => 'Consumer Load Eligibility Survey',
            'description' => 'Rules that determine whether the consumer loan application should be accepted or rejected',
        ],
    ];

    /**
     * run.
     */
    public function run()
    {
        foreach($this->seeds as $seed) {
            Survey::insert($seed);
        }
    }
}

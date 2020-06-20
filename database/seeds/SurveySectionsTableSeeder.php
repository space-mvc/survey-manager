<?php

use Illuminate\Database\Seeder;
use \App\Model\SurveySection;

/**
 * Class SurveySectionsTableSeeder
 */
class SurveySectionsTableSeeder extends Seeder
{
    /** @var array $seeds */
    protected $seeds = [
        [
            'survey_id' => 1,
            'name' => 'Borrower Age',
            'description' => 'This is the Borrower age section',
            'set_key' => 'borrower_age',
        ],
        [
            'survey_id' => 1,
            'name' => 'Affordability',
            'description' => 'This is the Affordability section',
            'set_key' => 'affordability',
        ],
        [
            'survey_id' => 1,
            'name' => 'Finance',
            'description' => 'This is the Finance section',
            'set_key' => 'finance',
        ],
    ];

    /**
     * run.
     */
    public function run()
    {
        foreach($this->seeds as $seed) {
            SurveySection::insert($seed);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use \App\Model\SurveyCriteria;

/**
 * Class SurveyCriteriaTableSeeder
 */
class SurveyCriteriaTableSeeder extends Seeder
{
    /** @var array $seeds */
    protected $seeds = [
        [
            'survey_section_id' => 1,
            'name' => 'Criteria one',
            'description' => 'This is criteria one',
            'criteria' => '${borrowerAge} > 21',
            'required' => 0
        ],
        [
            'survey_section_id' => 1,
            'name' => 'Criteria two',
            'description' => 'This is criteria two',
            'criteria' => '${borrowerAge} < 75',
            'required' => 0
        ],
        [
            'survey_section_id' => 2,
            'name' => 'Criteria three',
            'description' => 'This is criteria three',
            'criteria' => '${annualIncome} > 40000',
            'required' => 1
        ],
        [
            'survey_section_id' => 2,
            'name' => 'Criteria four',
            'description' => 'This is criteria four',
            'criteria' => '${loanAmount} < 3 * ${annualIncome}',
            'required' => 1
        ],
        [
            'survey_section_id' => 3,
            'name' => 'Criteria five',
            'description' => 'This is criteria five',
            'criteria' => '${loanLengthInMonths} > 12',
            'required' => 1
        ],
        [
            'survey_section_id' => 3,
            'name' => 'Criteria six',
            'description' => 'This is criteria six',
            'criteria' => '${loanAmount} < 500000',
            'required' => 1
        ],
    ];

    /**
     * run.
     */
    public function run()
    {
        foreach($this->seeds as $seed) {
            SurveyCriteria::insert($seed);
        }
    }
}

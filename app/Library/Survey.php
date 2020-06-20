<?php

namespace App\Library;

use App\Model\SurveyCriteria;

/**
 * Class Survey
 *
 * @package App\Library
 */
class Survey
{
    /** @var int $annualIncome */
    protected $annualIncome;

    /** @var string $borrowerTrustworthiness */
    protected $borrowerTrustworthiness;

    /** @var int $borrowerAge */
    protected $borrowerAge;

    /** @var int $loanLengthInMonths */
    protected $loanLengthInMonths;

    /** @var int $loanAmount */
    protected $loanAmount;

    /** @var $criteria */
    protected $criteria;

    /** @var bool $criteriaPass */
    protected $criteriaPass = true;

    /**
     * evaluate.
     */
    public function evaluate()
    {
        $criteria = SurveyCriteria::get();
        $results = $criteria->toArray();

        if(!empty($results)) {
            foreach($results as $key => $result) {

                $result['criteria'] = str_replace('${annualIncome}', $this->annualIncome, $result['criteria']);
                $result['criteria'] = str_replace('${borrowerAge}', $this->borrowerAge, $result['criteria']);
                $result['criteria'] = str_replace('${loanLengthInMonths}', $this->loanLengthInMonths, $result['criteria']);
                $result['criteria'] = str_replace('${loanAmount}', $this->loanAmount, $result['criteria']);

                $results[$key]['criteria_parsed'] = $result['criteria'];
                $results[$key]['criteria_response'] = eval('return '.$result['criteria'].';');

                if($result['required'] == true && $results[$key]['criteria_response'] == false) {
                    $this->criteriaPass = false;
                }
            }
        }

        $this->criteria = $results;
    }

    /**
     * toArray.
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'annual_income' => $this->annualIncome,
            'borrower_trustworthiness' => $this->borrowerTrustworthiness,
            'borrower_age' => $this->borrowerAge,
            'loan_length_in_months' => $this->loanLengthInMonths,
            'loan_amount' => $this->loanAmount,
            'criteria' => $this->criteria,
            'criteria_pass' => $this->criteriaPass
        ];
    }

    /**
     * @return int
     */
    public function getAnnualIncome(): int
    {
        return $this->annualIncome;
    }

    /**
     * @param int $annualIncome
     */
    public function setAnnualIncome(int $annualIncome): void
    {
        $this->annualIncome = $annualIncome;
    }

    /**
     * @return string
     */
    public function getBorrowerTrustworthiness(): string
    {
        return $this->borrowerTrustworthiness;
    }

    /**
     * @param string $borrowerTrustworthiness
     */
    public function setBorrowerTrustworthiness(string $borrowerTrustworthiness): void
    {
        $this->borrowerTrustworthiness = $borrowerTrustworthiness;
    }

    /**
     * @return int
     */
    public function getBorrowerAge(): int
    {
        return $this->borrowerAge;
    }

    /**
     * @param int $borrowerAge
     */
    public function setBorrowerAge(int $borrowerAge): void
    {
        $this->borrowerAge = $borrowerAge;
    }

    /**
     * @return int
     */
    public function getLoanLengthInMonths(): int
    {
        return $this->loanLengthInMonths;
    }

    /**
     * @param int $loanLengthInMonths
     */
    public function setLoanLengthInMonths(int $loanLengthInMonths): void
    {
        $this->loanLengthInMonths = $loanLengthInMonths;
    }

    /**
     * @return int
     */
    public function getLoanAmount(): int
    {
        return $this->loanAmount;
    }

    /**
     * @param int $loanAmount
     */
    public function setLoanAmount(int $loanAmount): void
    {
        $this->loanAmount = $loanAmount;
    }
}

<?php

namespace App\Http\Controllers;

use App\Library\Survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
 * Class SurveyController
 *
 * @package App\Http\Controllers
 */
class SurveyController extends Controller
{
    /**
     * index.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        // setup validation
        $validator = Validator::make(
            [
                'annual_income' => $request->annual_income,
                'borrower_trustworthiness' => $request->borrower_trustworthiness,
                'borrower_age' => $request->borrower_age,
                'loan_length_in_months' => $request->loan_length_in_months,
                'loan_amount' => $request->loan_amount,
            ],
            [
                'annual_income' => 'required|integer',
                'borrower_trustworthiness' => 'required|string',
                'borrower_age' => 'required|integer',
                'loan_length_in_months' => 'required|integer',
                'loan_amount' => 'required|integer',
            ]
        );

        // run validation
        if ($validator->fails()) {

            // return failed validation response
            return response()->json(
                [
                    'validation_errors' => $validator->errors()
                ]
            );
        }

        $survey = new Survey();
        $survey->setAnnualIncome($request->annual_income);
        $survey->setBorrowerTrustworthiness($request->borrower_trustworthiness);
        $survey->setBorrowerAge($request->borrower_age);
        $survey->setLoanLengthInMonths($request->loan_length_in_months);
        $survey->setloanAmount($request->loan_amount);
        $survey->evaluate();

        return response()->json([
            'data' => $survey->toArray()
        ]);
    }
}

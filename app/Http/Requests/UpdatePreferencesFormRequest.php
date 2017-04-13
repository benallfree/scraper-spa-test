<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePreferencesFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'email|required',
            'zip_code' => 'required|max:256',
            'purchase_price' => 'required|min:0|max:1000000000',
            'down_payment' => 'required|min:0|max:1000000000',
            'credit_score' => 'required|max:256',
            'military' => 'boolean',
            'annual_income' => 'required|min:0|max:1000000000',
            'monthly_debts' => 'required|min:0|max:1000000000',
            'property_type' => 'required|max:256',
            'home_usage' => 'required|max:256',
            'first_time_buyer' => 'boolean',
            'new_construction' => 'boolean',
            'filed_bankruptcy' => 'boolean',
            'had_foreclosure' => 'boolean',
            'self_employed' => 'boolean',
            'checked_desired_loan_programs' => 'required|array',
        ];
    }
}

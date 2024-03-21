<?php

namespace App\Http\Requests\PDS;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFamilyBackgroundRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'spouse_first_name' => [
                'nullable',
                'string'
            ],
            'spouse_middle_name' => [
                'nullable',
                'string'
            ],
            'spouse_surname' => [
                'nullable',
                'string'
            ],
            'spouse_suffix' => [
                'nullable',
                'string',
                'in:N/A,JR,SR,II,III,IV'
            ],
            'spouse_occupation' => [
                'nullable',
                'string'
            ],
            'spouse_employeer' => [
                'nullable',
                'string'
            ],
            'spouse_business_name' => [
                'nullable',
                'string'
            ],
            'spouse_business_address' => [
                'nullable',
                'string'
            ],
            'spouse_telephone_no' => [
                'nullable',
                'string'
            ],
            'father_first_name' => [
                'nullable',
                'string'
            ],
            'father_middle_name' => [
                'nullable',
                'string'
            ],
            'father_surname' => [
                'nullable',
                'string'
            ],
            'father_suffix' => [
                'nullable',
                'string',
                'in:N/A,JR,SR,II,III,IV'
            ],
            'mother_maiden_name' => [
                'nullable',
                'string'
            ],
            'mother_first_name' => [
                'nullable',
                'string'
            ],
            'mother_middle_name' => [
                'nullable',
                'string'
            ],
            'mother_surname' => [
                'nullable',
                'string'
            ],
        ];
    }
}

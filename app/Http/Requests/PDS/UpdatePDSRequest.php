<?php

namespace App\Http\Requests\PDS;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePDSRequest extends FormRequest
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
        $pdsId = $this->route('pd')->id;

        return [
            'first_name' => [
                'required',
                'string'
            ],
            'middle_name' => [
                'nullable',
                'string'
            ],
            'surname' => [
                'required',
                'string'
            ],
            'suffix' => [
                'required',
                'string',
                'in:N/A,JR,SR,II,III,IV'
            ],
            'date_of_birth' => [
                'required',
                'date'
            ],
            'place_of_birth' => [
                'required',
                'string'
            ],
            'sex' => [
                'required',
                'string',
                'in:male,female'
            ],
            'civil_status' => [
                'required',
                'string',
                'in:single,married,widowed,separated'
            ],
            'height' => [
                'required',
                'numeric',
            ],
            'weight' => [
                'required',
                'numeric',
            ],
            'blood_type' => [
                'nullable',
                'string',
            ],
            'gsis_id' => [
                'nullable',
                'string',
            ],
            'pag_ibig_id' => [
                'nullable',
                'string',
            ],
            'philhealth_id' => [
                'nullable',
                'string',
            ],
            'sss_id' => [
                'nullable',
                'string',
            ],
            'tin_id' => [
                'nullable',
                'string',
            ],
            'agency_employee_no' => [
                'nullable',
                'string',
            ],
            'citizenship' => [
                'required',
                'in:filipino,dual_citizen_by_birth,dual_citizen_by_naturalization'
            ],
            'country' => [
                'required',
                'string',
            ],
            'telephone_no' => [
                'required',
                'string',
            ],
            'mobile_no' => [
                'required',
                'string',
            ],
            'email' => [
                'required',
                'email',
                Rule::unique('personal_information', 'email')->ignore($pdsId),
            ],
            'residential_province' => [
                'required',
                'string'
            ],
            'residential_city' => [
                'required',
                'string'
            ],
            'residential_barangay' => [
                'required',
                'string'
            ],
            'residential_street' => [
                'required',
                'string'
            ],
            'residential_house_no' => [
                'required',
                'string'
            ],
            'residential_subdivision' => [
                'required',
                'string'
            ],
            'residential_zipcode' => [
                'required',
                'numeric'
            ],
            'permanent_province' => [
                'required',
                'string'
            ],
            'permanent_city' => [
                'required',
                'string'
            ],
            'permanent_barangay' => [
                'required',
                'string'
            ],
            'permanent_street' => [
                'required',
                'string'
            ],
            'permanent_house_no' => [
                'required',
                'string'
            ],
            'permanent_subdivision' => [
                'required',
                'string'
            ],
            'permanent_zipcode' => [
                'required',
                'numeric'
            ],
        ];
    }
}

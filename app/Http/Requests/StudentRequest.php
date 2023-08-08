<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'registration_no' => ['required'],
            'roll_no' => ['required'],
            'school_madrasa' => ['required'],
            'student_type' => ['required'],
            'area' => ['required'],
            'name_bn' => ['required'],
            'name_en' => ['required'],
            'father_name_bn' => ['required'],
            'father_name_en' => ['required'],
            'mother_name_bn' => ['required'],
            'mother_name_en' => ['required'],
            'class_roll' => ['required'],
            'class_division' => ['required'],
            'class_section' => ['required'],
            'present_address' => ['required'],
            'permanent_address' => ['required'],
            'permanent_address_village' => ['required'],
            'permanent_address_post_office' => ['required'],
            'permanent_address_thana' => ['required'],
            'permanent_address_district' => ['required'],
            'mobile' => ['required'],
            'facebook' => ['nullable'],
            'dob' => ['required'],
            'blood_group' => ['required'],
            'email' => ['required'],
            'absent_of_parent_name' => ['required'],
            'absent_of_parent_relation' => ['required'],
            'absent_of_parent_occupation' => ['required'],
            'absent_of_parent_annual_earning' => ['required'],
            'previous_scholarship_name_group' => ['required'],
        ];
    }
}

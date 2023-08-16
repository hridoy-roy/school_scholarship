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
            'school_madrasa' => ['required'],
            'student_type' => ['required'],
            'area' => ['required|min:3|max:255'],
            'name_bn' => ['required|min:3|max:255'],
            'name_en' => ['required|min:3|max:255'],
            'father_name_bn' => ['required|min:3|max:255'],
            'father_name_en' => ['required|min:3|max:255'],
            'father_occupation' => ['required|min:3|max:255'],
            'mother_name_bn' => ['required|min:3|max:255'],
            'mother_name_en' => ['required|min:3|max:255'],
            'mother_occupation' => ['required|min:3|max:255'],
            'class_roll' => ['required|numeric'],
            'class_division' => ['required|min:3|max:255'],
            'class_section' => ['required|min:3|max:255'],
            'present_address' => ['required|min:3|max:255'],
            'permanent_address' => ['required|min:3|max:255'],
            'permanent_address_village' => ['required|min:3|max:255'],
            'permanent_address_post_office' => ['required'],
            'permanent_address_thana' => ['required|min:3|max:255'],
            'permanent_address_district' => ['required|min:3|max:255'],
            'mobile' => ['required|unique:students,mobile|min:10|max:13'],
            'facebook' => ['nullable'],
            'dob' => ['required'],
            'blood_group' => ['required'],
            'email' => ['required|email|unique:students,email'],
            'absent_of_parent_name' => ['required|min:3|max:255'],
            'absent_of_parent_relation' => ['required|min:3|max:255'],
            'absent_of_parent_occupation' => ['required|min:3|max:255'],
            'absent_of_parent_annual_earning' => ['required|min:3|max:255'],
            'previous_scholarship_name_group' => ['required|min:3|max:255'],
        ];
    }
}
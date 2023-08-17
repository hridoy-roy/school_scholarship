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
            'image' => ['required', 'mimes:png,jpg,jpeg,webp', 'max:1024'],
            'school_madrasa' => ['required'],
            'student_type' => ['required'],
            'area' => ['required', 'max:255'],
            'name_bn' => ['required', 'max:255'],
            'name_en' => ['required', 'max:255'],
            'father_name_bn' => ['required', 'max:255'],
            'father_name_en' => ['required', 'max:255'],
            'father_occupation' => ['required', 'max:255'],
            'mother_name_bn' => ['required', 'max:255'],
            'mother_name_en' => ['required', 'max:255'],
            'mother_occupation' => ['required', 'max:255'],
            'institute_id' => ['required', 'numeric'],
            'student_class_id' => ['required', 'numeric'],
            'class_roll' => ['required', 'numeric'],
            'class_division' => ['required', 'max:255'],
            'class_section' => ['required', 'max:255'],
            'present_address' => ['required', 'max:255'],
            'permanent_address' => ['required', 'max:255'],
            'permanent_address_village' => ['required', 'max:255'],
            'permanent_address_post_office' => ['required'],
            'permanent_address_thana' => ['required', 'max:255'],
            'permanent_address_district' => ['required', 'max:255'],
            'mobile' => ['required', 'unique:students,mobile', 'min:10', 'max:13'],
            'facebook' => ['nullable'],
            'dob' => ['required'],
            'blood_group' => ['required'],
            'email' => ['required', 'email', 'unique:students,email'],
            'absent_of_parent_name' => ['required', 'max:255'],
            'absent_of_parent_relation' => ['required', 'max:255'],
            'absent_of_parent_occupation' => ['required', 'max:255'],
            'absent_of_parent_annual_earning' => ['required', 'max:255'],
            'previous_scholarship_name_group' => ['required', 'max:255'],
        ];
    }
}

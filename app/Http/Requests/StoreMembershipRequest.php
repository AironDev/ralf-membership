<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMembershipRequest extends FormRequest
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
            
            'sur_name' => 'required',
            'other_names' => 'required',
            'email' => ['required','email','unique:memberships'],
            'phone' => 'required',
            'whatsapp' => 'required',
            'birth_date' => 'required',
            'nationality' => 'required',
            'gender' => 'required',
            'institution' => 'required',
            'graduation_year' => 'required',
            'course_of_study' => 'required',
            'qualification' => 'required',
            'startup_overview' => 'required',
            'current_stage' => 'required',
            'social_problem' => 'required',
            'why_solve_problem' => 'required',
            'team_count' => 'required',
            'referer' => 'required',
            'why_join_community' => 'required',
            'is_entreprenuer' => 'required'


        ];
    }
}

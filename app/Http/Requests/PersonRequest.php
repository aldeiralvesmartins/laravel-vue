<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'taxpayer' => 'required|string|unique:people,taxpayer|max:18',
            'birthdate' => 'nullable|date',
            'rg_number' => 'nullable|string|unique:people,rg_number|max:14',
            'dispatcher_agency_id' => 'required|integer|exists:dispatching_agencies,id',
            'observation' => 'nullable|string',
            'name_mother' => 'required|string|max:80',
            'name_father' => 'required|string|max:80',
            'naturalness' => 'required|string|max:70',
            'nationality_id' => 'required|integer|exists:nationalities,id',
            'expedition_date_rg' => 'nullable|date',
            'gender' => 'required|string|max:30',
            'nationalities' => 'required|integer',
            'schooling_id' => 'required|integer|exists:schooling,id',
            'marital_status_id' => 'required|integer|exists:marital_statuses,id',
            'address_id' => 'required|integer|exists:addresses,id',
            'married_date' => 'nullable|date',
            'profession_id' => 'required|integer|exists:professions,id',
            'work_status_id' => 'required|integer|exists:work_status,id',
            'has_social_benefits' => 'required|boolean',
            'has_deficiencies' => 'required|boolean',
            'has_chronic_diseases' => 'required|boolean',
            'has_absent_parner' => 'required|boolean',
        ];
    }
}

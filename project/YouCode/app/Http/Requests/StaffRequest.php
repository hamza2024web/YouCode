<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffRequest extends FormRequest
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
            'role' => 'required',
            'name' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'date_de_naissance' => 'required',
            'CIN' => 'required',
            'Phone_numbre' => 'required',
            'campus' => 'required',
        ];
    }
}

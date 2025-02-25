<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'date_de_naissance' => 'required',
            'cin' => 'required|max:10',
            'phone_numbre' => 'required|max:10',
            'campus' => 'required',
        ];
    }
}

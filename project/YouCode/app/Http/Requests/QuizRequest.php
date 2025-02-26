<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuizRequest extends FormRequest
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
            'question' => 'required|string|max:255',
            'response1' => 'required|string|max:255',
            'response2' => 'required|string|max:255',
            'response3' => 'required|string|max:255',
            'response4' => 'required|string|max:255',
            'correct_answer' => 'required|string|in:response1,response2,response3,response4',
        ];
    }
}

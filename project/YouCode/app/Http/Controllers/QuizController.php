<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuizRequest;
use App\Models\Question;
use App\Models\Response;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function store(QuizRequest $quiz){
        $quizInputs = $quiz->validated();

        $saveQuestion = Question::create([
            'question' => $quizInputs['question']
        ]);

        $responses = [
            'response1' => $quizInputs['response1'],
            'response2' => $quizInputs['response2'],
            'response3' => $quizInputs['response3'],
            'response4' => $quizInputs['response4'],
        ];

        foreach ($responses as $key => $text){
            Response::create([
                'question_id' => $saveQuestion->id,
                'text' => $text,
                'is_correct' => $quizInputs['correct_answer'] === $key,
            ]);
        }
        return redirect('dashboard')->with('success','the quiz is insert correctly');
    }
}
 
<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuizRequest;
use App\Models\Question;
use App\Models\Response;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Request $request){

        foreach ($request->questions as $index => $questionText) {

            $saveQuestion = Question::create([
                'question' => $questionText,
            ]);

            $responsesKey = 'responses_' . ($index + 1);
            $correctAnswerKey = 'correct_answer_' . ($index + 1);

            $correctIndex = intval(str_replace('response_', '', $request->$correctAnswerKey)) - 1;

            foreach ($request->$responsesKey as $responseIndex => $responseText) {
                Response::create([
                    'question_id' => $saveQuestion->id,
                    'text' => $responseText,
                    'is_correct' => $responseIndex === $correctIndex, 
                ]);
            }
        }
        return redirect('dashboard');
    }
}
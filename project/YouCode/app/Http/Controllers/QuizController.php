<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuizRequest;
use App\Models\Question;
use App\Models\Response;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function store(Request $quiz){
        foreach ($quiz->questions as $index => $questionText) {

            $saveQuestion = Question::create([
                'question' => $questionText,
            ]);

            $responsesKey = 'responses_' . ($index + 1);
            $correctAnswerKey = 'correct_answer_' . ($index + 1);

            $correctIndex = intval(str_replace('response_', '', $quiz->$correctAnswerKey)) - 1;

            foreach ($quiz->$responsesKey as $responseIndex => $responseText) {
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
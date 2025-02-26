<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuizRequest;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function store(QuizRequest $quiz){
        dd($quiz);
        $quizInputs = $quiz->validated();

    }
}

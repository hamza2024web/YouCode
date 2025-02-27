<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\QuizHistory;
use App\Models\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class CandidatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function indexCandidat(){
        $user = Auth::user();
        $questions = Question::with('responses')->paginate(1);
        return view('candidat',compact('questions'),compact('user'));
    }

    public function store(Request $request ){
        
        $answersFilds = $request->validate([
            'question_id' => 'required',
            'candidat_id' => 'required',
            'response_id' => 'required',
        ]);

        $question = $answersFilds['question_id'];

        QuizHistory::create($answersFilds);

        $user = Auth::user();
        $questions = Question::with('responses')->paginate($question+1);
        return view('candidat',compact('questions'),compact('user'));
    }
}

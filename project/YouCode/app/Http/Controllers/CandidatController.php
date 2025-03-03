<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\QuizHistory;
use App\Models\Response;
use App\Models\User;
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
        $totalQuestions = Question::count();
        $answeredQuestions = QuizHistory::where('candidat_id', $answersFilds['candidat_id'])->distinct('response_id')->count();

        if ($answeredQuestions >= $totalQuestions) {
            return redirect()->route('quiz.completed'); 
        }

        $nextQuestion = $question+1;
        $questions = Question::with('responses')->paginate($nextQuestion);
        $candidat_id = $answersFilds['candidat_id'];
        $this->calculateScore($candidat_id);
        return view('candidat',compact('questions'),compact('user'));
    }
    public function calculateScore($candidat_id){
        $UsersResponses = QuizHistory::where('candidat_id',$candidat_id)->pluck('response_id')->toArray();
        $correctAnswers = Response::whereIn('id',$UsersResponses)->wehre('is_correct',true)->count();
        $totalQuestions = Question::count();
        $score = ($correctAnswers / $totalQuestions) * 100 ;

        
    }
}

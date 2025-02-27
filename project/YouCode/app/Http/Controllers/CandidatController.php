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
    public function indexCandidat(){
        $user = Auth::user();
        $questions = Question::with('responses')->paginate(1);
        return view('candidat',compact('questions'),compact('user'));
    }

    public function store(Request $request){
        $answersFilds = $request->validate([
            'candidat_id' => 'required',
            'response_id' => 'required',
        ]);

        QuizHistory::create($answersFilds);
        
    }
}

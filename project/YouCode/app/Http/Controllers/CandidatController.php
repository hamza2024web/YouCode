<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Response;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    public function indexCandidat(){
        
        $questions = Question::with('responses')->paginate(1);
        return view('candidat',compact('questions'));
    }
}

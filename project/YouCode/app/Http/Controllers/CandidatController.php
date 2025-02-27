<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Response;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    public function indexCandidat(){

        $questions = Question::all();
        $responses = Response::all();
        
        return view('candidat',compact('questions','responses'));
    }
}

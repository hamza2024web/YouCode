<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidatController extends Controller
{
    public function indexCandidat(){
        
        return view('candidat');
    }
}

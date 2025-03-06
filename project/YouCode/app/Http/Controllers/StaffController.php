<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function show(){
        return view('staff');
    }
    public function showEvent(){
        return view('event');
    }
}

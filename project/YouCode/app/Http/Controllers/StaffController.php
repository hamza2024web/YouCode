<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function show(){
        return view('staff');
    }
    public function showEvent(){
        return view('event');
    }

    public function createEvent(Request $request){

        $formFields =  $request->validate([
            'title' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
            'description' => 'required',
        ]);

        Event::create($formFields);

        return redirect('staff')->with('success','Event Created Successfly');
    }
}

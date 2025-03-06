<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StaffController extends Controller
{
    public function show(){
        return view('staff');
    }
    public function showEvent(){
        $user = Auth::user();
        return view('event',compact('user'));
    }

    public function createEvent(Request $request){

        $formFields =  $request->validate([
            'staff_id' => 'required',
            'title' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
            'description' => 'required',
        ]);

        Event::create($formFields);

        return redirect('staff')->with('success','Event Created Successfly');
    }
}

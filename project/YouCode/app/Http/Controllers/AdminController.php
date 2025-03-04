<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('dashboard');
    }
    public function user(){
        $users = User::with('quizResults')->get();
        return view('UsersManagement',compact('users'));
    }
}

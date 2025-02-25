<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function login(Request $request) {
        $email = $request->email;
        $password = $request->password;
        $values = ['email' => $email, 'password' => $password];
    
        if (Auth::attempt($values)) {
            $user = Auth::user();
            $request->session()->regenerate();
            if ($user->role === "Admin") {
                return redirect('dashboard')->with('success', 'Vous êtes bien connecté ' . $email . '.');
            } else {
                return redirect('etudiant')->with('success', 'Vous êtes bien connecté ' . $email . '.');
            }
        } else {
            return back()->withErrors([
                'email' => 'Email ou mot de passe incorrect.'
            ]);
        }
    }
}

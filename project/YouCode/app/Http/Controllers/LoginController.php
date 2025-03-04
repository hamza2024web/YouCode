<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function login(LoginRequest $request) {
        $email = $request->email;
        $password = $request->password;
        $values = ['email' => $email, 'password' => $password];
    
        if (Auth::attempt($values)) {
            $user = Auth::user();
            $request->session()->regenerate();

            if ($user->role) {
                if ($user->role->role === "Admin") {
                    return redirect('dashboard')->with('success', 'Vous êtes bien connecté ' . $user->email . '.');
                } elseif ($user->role->role === "Apprenant") {
                    return redirect('home')->with('success', 'Vous êtes bien connecté ' . $user->email . '.');
                }
            }
        } else {
            return back()->withErrors([
                'email' => 'Email ou mot de passe incorrect.'
            ]);
        }
    }
    public function logout(){
        Session()->flush();
        Auth::logout();
        return redirect('login');
    }
}

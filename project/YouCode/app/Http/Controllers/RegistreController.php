<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistreController extends Controller
{
    public function index (){
        return view('registre');
    }
    public function store(RegistreRequest $request){
        $formFields = $request->validated();
        $password = $request->password;
        $formFields['password'] = Hash::make($password);
        User::create($formFields);

        return redirect('login');
    }
}

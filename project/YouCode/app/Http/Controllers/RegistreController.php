<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistreRequest;
use App\Models\Role;
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

        $role = Role::where('role', 'Apprenant')->first();
        $formFields['role_id'] = $role->id;

        User::create($formFields);

        return redirect('login')->with('success','Your account Is Registred Successfully');
    }
}

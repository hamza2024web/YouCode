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
    public function storeStaff(Request $request){
        $formFields = $request->validate([
            'role' => 'required',
            'name' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'date_de_naissance' => 'required',
            'CIN' => 'required',
            'Phone_numbre' => 'required',
            'campus' => 'required',
        ]);
        $password = $request->password;
        $formFields['password'] = Hash::make($password);

        if ($formFields['role'] == "Administrateur"){
            $role = Role::where('role','Administrateur')->first();
        } elseif ($formFields['role'] == "Staff") {
            $role = Role::where('role','Staff')->first();
        } elseif ($formFields['role'] == "CME"){
            $role = Role::where('role','CME')->first();
        }

        $formFields['role_id'] = $role->id;

        User::create($formFields);
        return redirect('UsersManagement')->with('success','Account Created Successfully');
    }
}

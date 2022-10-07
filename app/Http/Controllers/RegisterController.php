<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
//Models
use App\Models\User;
use App\Models\Company;
//Facades
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function create(Request $request){
        //CREATE USER IN DB
        $request->request->add(['company_name' => Str::slug($request->username)]);
        //validate

        $this->validate($request, [
            'rut' => 'required|min:8|unique:users',
            'name' => 'required|min:3',
            'email' => 'required|min:10|unique:users|email',
            'password' => 'required|confirmed|min:6',
            'address' => 'required|min:10'
        ]);
        User::create([
            'rut' => $request->rut,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        //CREATE COMPANY IN DB
        Company::create([
            'rut' => $request->rut,
            'address' => $request->address,
        ]);


    }
}

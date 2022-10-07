<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }


    public function store(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth()->attempt($request->only('email', 'password'), $request->remember)){
            request()->session()->regenerate();
            return redirect()->route('project');
        }
        return back()->with('mensaje', 'Credenciales invalidas');

    }

    public function destroy(){
        auth()->logout();
        return redirect()->route('login');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
//Facades
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
//Models
use App\Models\User;
use App\Models\Company;

class LoginAuthForm extends Component
{
    public $email;
    public $password;
    public $remember;

    protected $rules = [
        'email' => 'required',
        'password' => 'required',
        'remember' => 'nullable',
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.login-auth-form');
    }

    public function save(){
        $validateData = $this->validate();
        $remember = array_pop($validateData);
        if(Auth::attempt($validateData, $remember)){
            request()->session()->regenerate();
            return redirect()->route('project');
        }
        return redirect('/login');
    }
}

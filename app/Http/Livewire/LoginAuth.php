<?php

namespace App\Http\Livewire;

use Livewire\Component;


class LoginAuth extends Component
{
    public $email;
    public $password;
    public $remember;

    protected $rules = [
        'email' => 'required|email|min:10',
        'password' => 'required|min:6',
        'remember' => ''
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.login-auth');
    }
    public function store(){
        $validateData = $this->validate();
        $remember = array_pop($validateData);
        dd($remember);
        if(auth()->attempt($this->validateData->only('email', 'password'), $remember)){
            request()->session()->regenerate();
            
        }
        
    }
}

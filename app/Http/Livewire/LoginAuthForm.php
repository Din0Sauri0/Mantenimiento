<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoginAuthForm extends Component
{

    public $rut;
    public $name;
    public $address;
    public $email;
    public $password;

    protected $rules = [
        'rut' => 'required|min:8|unique:users',
        'name' => 'required|min:3',
        'email' => 'required|min:10|unique:users|email',
        'password' => 'required|confirmed|min:6',
        'address' => 'required|min:10'
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.login-auth-form');
    }

    public function save(){
        $validateDate = $this->validate();
        dd($validateDate);
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
//Facades
use Illuminate\Support\Facades\Hash;
//Models
use App\Models\User;
use App\Models\Company;

class RegisterAuthForm extends Component
{
    public function render()
    {
        return view('livewire.register-auth-form');
    }
    public $rut;
    public $name;
    public $address;
    public $email;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'rut' => 'required|min:8|unique:users',
        'name' => 'required|min:3',
        'email' => 'required|min:10|unique:users|email',
        'password' => 'required|min:6|confirmed',
        'password_confirmation' => 'required|min:6',
        'address' => 'required|min:10'
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function save(){
        $validateDate = $this->validate();
        User::create([
            'id' => $this->rut,
            'rut' => $this->rut,
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        Company::create([
            'rut' => $this->rut,
            'address' => $this->address,
        ]);
        return redirect('/login');
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Company;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class RegisterAuth extends Component
{
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
        'password' => 'required|confirmed|min:6',
        'password_confirmation' => 'required|min:6',
        'address' => 'required|min:10'
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.register-auth');
    }
    public function save(){
        $validateData = $this->validate();
        //CREATE USER IN DB
        User::create([
            'rut' => $this->rut,
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        //CREATE COMPANY IN DB
        Company::create([
            'rut' => $this->rut,
            'address' => $this->address,
        ]);
        return redirect()->route('login');
    }

}

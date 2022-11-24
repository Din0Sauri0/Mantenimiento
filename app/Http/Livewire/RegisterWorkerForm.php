<?php

namespace App\Http\Livewire;

use Livewire\Component;
//Facades
use Illuminate\Support\Facades\Hash;
//Models
use App\Models\User;
use App\Models\Worker;

class RegisterWorkerForm extends Component
{
    public $rut;
    public $name;
    public $last_name;
    public $email;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'rut' => 'required|min:8|unique:users',
        'name' => 'required|min:3',
        'last_name' => 'required|min:5',
        'email' => 'required|min:10|unique:users|email',
        'password' => 'required|min:6',
        'password_confirmation' => 'required|min:6'
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.register-worker-form');
    }

    public function save(){
        $validateData = $this->validate();
        User::create([
            'id' => $this->rut,
            'rut' =>$this->rut,
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);
        Worker::create([
            'rut' => $this->rut,
            'last_name' => $this->last_name,
            'company_rut' => auth()->user()->rut
        ]);
        return redirect()->route('workers');
    }    
}

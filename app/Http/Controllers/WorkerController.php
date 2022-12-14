<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreWorkerRequest;
use App\Http\Requests\UpdateWorkerRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Worker;

class WorkerController extends Controller
{
    public function index()
    {
        $worker = Worker::all();
        return view('workers', compact('worker'));
    }

    public function create(Request $request){
        $company_rut = auth()->user()->rut; 
        // dd($company_rut);
        // dd($request);
        //Validation Data
        $this->validate($request, [
            'rut' => 'required|min:8|unique:users',
            'name' =>'required|min:3|max:60',
            'last_name' => 'required|min:3|max:60',
            'email' =>'required|email|unique:users|min:10',
            'password' =>'required|min:6|confirmed',
        ]);
        //dd($request);
        //Create worker in user table
        User::create([
            'rut' => $request->rut,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        //Create worker in workers table
        Worker::create([
            'rut' => $request->rut,
            'last_name' => $request->last_name,
            'company_rut' => $company_rut,
        ]);
    }
}

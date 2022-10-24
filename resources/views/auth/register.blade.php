@extends('layouts.app')
@section('title')
    Registrate
@endsection
@section('content')
<div class='font-mono h-screen w-screen p-[10%] grid items-center justify-center sm:grid-cols-2 xl:grid-cols-3 overflow-auto' style='background-color: #eee;'>
    <div class='bg-white w-full rounded-xl drop-shadow-md p-[5%] overflow-auto'>
        <header class='flex justify-center text-2xl font-bold'>
            Rellena el formulario para registrarte.
        </header>
        {{-- Formulario de registro mediante livewire --}}
        @livewire('register-auth')
        
        <footer class='flex items-center justify-center flex-col font-bold'>
            <span>O</span>
            <a href="{{ route('login') }}" class='hover:text-sky-700 hover:underline'>Pincha aqui para iniciar sesion</a>
        </footer>

    </div>
</div>
@endsection
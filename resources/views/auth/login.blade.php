@extends('layouts.app')
@section('title')
    Login
@endsection
@section('content')

<div class='font-mono h-screen w-screen p-[10%] grid items-center justify-center sm:grid-cols-2 xl:grid-cols-3' style='background-color: #eee;'>
    <div class='bg-white w-full rounded-xl drop-shadow-md p-[5%]'>
        <header class='flex justify-center text-2xl font-bold'>
            Usa tus credenciales para iniciar sesion.
        </header>
<<<<<<< HEAD
        <livewire:login-auth-form>
        
=======
        @livewire('login-auth')
>>>>>>> 998b9c6eada7c51953cd61f70ffbf789b5c13025
        <footer class='flex items-center justify-center flex-col font-bold'>
            <span>O</span>
            <a href="{{ route('register') }}" class='hover:text-sky-700 hover:underline'>Pincha aqui para registrarte</a>
        </footer>

    </div>
</div>

@endsection
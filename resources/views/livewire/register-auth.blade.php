<div>
    <form wire:submit.prevent="save" method="POST" action="{{ route('login') }}" class='flex flex-col p-2 gap-3 mt-3'>
        @csrf
<<<<<<< HEAD:resources/views/livewire/login-auth-form.blade.php
        <label for="email" class='font-bold'>Email</label>
        <div class='relative flex items-center'>
            <svg class='absolute h-4 w-4 ml-3 pointer-events-none' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <input class='border-none ring-2 ring-orange-100 hover:ring-orange-400 focus:ring-2 focus:ring-orange-400 h-9 w-full pr-3 pl-10 bg-gray-100 rounded-xl' type="email" name="email" id="email" wire:model="email">
=======
        <div class="flex flex-col">
            <label for="rut_empresa" class='font-bold'>Rut</label>
            <div class='relative flex items-center'>
                <svg class='absolute h-4 w-4 ml-3 pointer-events-none' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                </svg>
                <input class='border-none ring-2 ring-orange-100 hover:ring-orange-400 focus:ring-2 focus:ring-orange-400 h-9 w-full pr-3 pl-10 bg-gray-100 rounded-xl' type="text" name="rut" id="rut" wire:model="rut">
            </div>
            @error('rut')
            <div class="bg-red-100 mt-1 border-l-4 border-red-500 p-1">
                <span class="text-red-500">{{ $message }}</span>
            </div>
            @enderror
>>>>>>> 998b9c6eada7c51953cd61f70ffbf789b5c13025:resources/views/livewire/register-auth.blade.php
        </div>
        
        <label for="password" class='font-bold'>Contraseña</label>
        <div class='relative flex items-center'>
            <svg class='absolute h-4 w-4 ml-3 pointer-events-none' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
            </svg>
            <input class='border-none ring-2 ring-orange-100 focus:ring-2 hover:ring-orange-400 focus:ring-orange-400 h-9 w-full pr-3 pl-10 bg-gray-100 rounded-xl' type="password" name="password" id="password" wire:model="password">
        </div>
        <div class='flex items-center w-full'>
            <input wire:model="remember" class="mr-4 rounded-full" type="checkbox" name="remember" id="remember">
            <label for="remember">Recuerda me</label>
        </div>
<<<<<<< HEAD:resources/views/livewire/login-auth-form.blade.php
        
        <button wire:submit.prevent="save" class='bg-orange-400 hover:bg-orange-500 hover:h-11 rounded-md h-9 text-gray-100 font-bold' type="submit">Iniciar</button>
=======
        <div class="flex flex-col">
            <label for="direccion" class='font-bold'>Correo electronico</label>
            <div class='relative flex items-center'>
                <svg class='absolute h-4 w-4 ml-3 pointer-events-none' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                </svg>
                <input class='border-none ring-2 ring-orange-100 hover:ring-orange-400 focus:ring-2 focus:ring-orange-400 h-9 w-full pr-3 pl-10 bg-gray-100 rounded-xl' type="email" name="email" id="email" wire:model="email">
            </div>
            @error('email')
            <div class="bg-red-100 mt-1 border-l-4 border-red-500 p-1">
                <span class="text-red-500">{{ $message }}</span>
            </div>
            @enderror
        </div>
        <div class="flex flex-col">
            <label for="password" class='font-bold'>Contraseña</label>
            <div class='relative flex items-center'>
                <svg class='absolute h-4 w-4 ml-3 pointer-events-none' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                </svg>
                <input class='border-none ring-2 ring-orange-100 focus:ring-2 hover:ring-orange-400 focus:ring-orange-400 h-9 w-full pr-3 pl-10 bg-gray-100 rounded-xl' type="password" name="password" id="password" wire:model="password">
            </div>
            @error('password')
            <div class="bg-red-100 mt-1 border-l-4 border-red-500 p-1">
                <span class="text-red-500">{{ $message }}</span>
            </div>
            @enderror
        </div>
        <div class="flex flex-col">
            <label for="re-password" class='font-bold'>Repetir contraseña</label>
            <div class='relative flex items-center'>
                <svg class='absolute h-4 w-4 ml-3 pointer-events-none' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                </svg>
                <input class='border-none ring-2 ring-orange-100 focus:ring-2 hover:ring-orange-400 focus:ring-orange-400 h-9 w-full pr-3 pl-10 bg-gray-100 rounded-xl' type="password" name="password_confirmation" id="password_confirmation" wire:model="password_confirmation">
            </div>
            @error('password_confirmation')
            <div class="bg-red-100 mt-1 border-l-4 border-red-500 p-1">
                <span class="text-red-500">{{ $message }}</span>
            </div>
            @enderror
        </div>
        <button wire:click="save" class='bg-orange-400 hover:bg-orange-500 hover:h-11 rounded-md h-9 text-gray-100 font-bold' type="submit">Registrar</button>
>>>>>>> 998b9c6eada7c51953cd61f70ffbf789b5c13025:resources/views/livewire/register-auth.blade.php
    </form>
</div>
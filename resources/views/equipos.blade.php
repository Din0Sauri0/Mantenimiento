@extends('layouts.app')
@section('title')
    Equipos
@endsection
@section('content')
    <main class='flex flex-col w-full gap-3 p-7 overflow-auto'>
        <div class=' px-4 flex justify-between'>
            <button class='flex p-2 text-white btn bg-orange-400 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 drop-shadow-lg rounded-lg' type="button" data-modal-toggle="defaultModal">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Agregar
            </button>
        </div>
    </main>

    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Crear un nuevo trabajador
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <form action="{{ route('workers') }}" method="POST" class='flex flex-col p-2 gap-3 mt-3'>
                        @csrf
                        <label for="rut_empresa" class='font-bold'>Rut</label>
                        <div class='relative flex items-center'>
                            <svg class='absolute h-4 w-4 ml-3 pointer-events-none' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                            </svg>
                            <input class='border-none ring-2 ring-orange-100 hover:ring-orange-400 focus:ring-2 focus:ring-orange-400 h-9 w-full pr-3 pl-10 bg-gray-100 rounded-xl' type="text" name="rut" id="rut">
                        </div>
                        <label for="nombre_empresa" class='font-bold'>Nombre</label>
                        <div class='relative flex items-center'>
                            <svg class='absolute h-4 w-4 ml-3 pointer-events-none' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                            </svg>
                            <input class='border-none ring-2 ring-orange-100 hover:ring-orange-400 focus:ring-2 focus:ring-orange-400 h-9 w-full pr-3 pl-10 bg-gray-100 rounded-xl' type="text" name="name" id="name">
                        </div>
                        <label for="nombre_empresa" class='font-bold'>Apellido</label>
                        <div class='relative flex items-center'>
                            <svg class='absolute h-4 w-4 ml-3 pointer-events-none' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                            </svg>
                            <input class='border-none ring-2 ring-orange-100 hover:ring-orange-400 focus:ring-2 focus:ring-orange-400 h-9 w-full pr-3 pl-10 bg-gray-100 rounded-xl' type="text" name="last_name" id="last_name">
                        </div>
                        <label for="direccion" class='font-bold'>Correo electronico</label>
                        <div class='relative flex items-center'>
                            <svg class='absolute h-4 w-4 ml-3 pointer-events-none' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                            <input class='border-none ring-2 ring-orange-100 hover:ring-orange-400 focus:ring-2 focus:ring-orange-400 h-9 w-full pr-3 pl-10 bg-gray-100 rounded-xl' type="email" name="email" id="email">
                        </div>
                        <label for="password" class='font-bold'>Contraseña</label>
                        <div class='relative flex items-center'>
                            <svg class='absolute h-4 w-4 ml-3 pointer-events-none' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                            </svg>
                            <input class='border-none ring-2 ring-orange-100 focus:ring-2 hover:ring-orange-400 focus:ring-orange-400 h-9 w-full pr-3 pl-10 bg-gray-100 rounded-xl' type="password" name="password" id="password">
                        </div>
                        <label for="re-password" class='font-bold'>Repetir contraseña</label>
                        <div class='relative flex items-center'>
                            <svg class='absolute h-4 w-4 ml-3 pointer-events-none' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                            </svg>
                            <input class='border-none ring-2 ring-orange-100 focus:ring-2 hover:ring-orange-400 focus:ring-orange-400 h-9 w-full pr-3 pl-10 bg-gray-100 rounded-xl' type="password" name="password_confirmation" id="password_confirmation">
                        </div>
                        <button class='bg-orange-400 hover:bg-orange-500 hover:h-11 rounded-md h-9 text-gray-100 font-bold' type="submit">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
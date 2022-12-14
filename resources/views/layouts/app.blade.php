<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @livewireStyles
    <title>@yield('title')</title>
</head>
<body>
    <div class='w-screen h-screen lg:flex lg:flex-row' style='background-color: #eee;'>
        @auth
        <nav class='bg-orange-400 text-white xl:w-1/6 lg:w-1/6 sm:w-1/6 xl:h-full lg:h-full sm:h-full flex flex-col'>
            <div class='w-full flex justify-between p-3'>
                <div>
                    <img class='w-20 h-15 lg:w-60 lg:h-35' src="{{ asset('img/logo.png') }}" alt="">
                </div>
                <div onclick='openMenu()' class='lg:hidden xl:hidden sm:hidden'>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                    </svg>
                </div>
            </div>
    
            <div id='menu' class='h-full flex justify-between flex-col hidden p-3 xl:inline-flex lg:inline-flex sm:inline-flex'>
                <div class='flex flex-col '>
                    <a class='flex justify-end p-3 rounded-md hover:bg-orange-600 xl:justify-start lg:justify-start sm:justify-start' href="{{ route('project') }}">Proyectos</a>
                    <a class='flex justify-end p-3 rounded-md hover:bg-orange-600 xl:justify-start lg:justify-start sm:justify-start' href="{{ route('clients') }}">Clientes</a>
                    <a class='flex justify-end p-3 rounded-md hover:bg-orange-600 xl:justify-start lg:justify-start sm:justify-start' href="{{ route('workers') }}">Trabajadores</a>
                    <a class='flex justify-end p-3 rounded-md hover:bg-orange-600 xl:justify-start lg:justify-start sm:justify-start' href="{{ route('equipment') }}">Equipos</a>
                </div>
                <div>
                    <a href="{{ route('logout') }}" class='flex justify-end p-3 rounded-md text-red-900 hover:bg-orange-600 xl:justify-start lg:justify-start sm:justify-start text-red'>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                        </svg>
                        Salir
                    </a>
                </div>
            </div>
        </nav>
        @endauth
        @yield('content')
    </div>

    <script src="../path/to/flowbite/dist/flowbite.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
    <script>
    
        const openMenu = () => {
            const menu = document.getElementById('menu');
            if(menu.classList.contains('hidden')){
                menu.classList.remove('hidden');
            }else{
                menu.classList.add('hidden');
            }
        }
    </script>
    @livewireScripts
</body>
</html>
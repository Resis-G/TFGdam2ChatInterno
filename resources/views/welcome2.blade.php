<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <div class="max-h-screen bg-gray-100 dark:bg-gray-900">
        <nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
            <!-- Primary Navigation Menu -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="shrink-0 flex items-center">
                            <a href="/">
                                <x-application-logo
                                    class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                            </a>
                        </div>

                        <!-- Navigation Links -->
                       
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <x-nav-link :href="route('users')" :active="request()->routeIs('users')">
                                {{ __('Funciones') }}
                            </x-nav-link>
                        </div>
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <x-nav-link :href="route('users')" :active="request()->routeIs('users')">
                                {{ __('Privicidad y seguridad') }}
                            </x-nav-link>
                        </div>
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <x-nav-link :href="route('users')" :active="request()->routeIs('users')">
                                {{ __('FyQ') }}
                            </x-nav-link>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <section class="flex max-h-screen mt-28 overflow-hidden">
            <div class="bg-white xl:w-5/12 lg:w-5/12 w-full p-6">
                <h3 class="pt-20 pl-80 text-7xl mb-1 text-blue-500">Conéctate, Conversa y Comparte Momentos</h3>
                <h1 class="pl-80 text-gray-500">¡Descubre la Magia del chat! con ChatSync</h1>

                <div class="pl-80 pt-12">
                    @if (Route::has('login') && Auth::check())
                    <div class="top-right links">
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    </div>
                @elseif (Route::has('login') && !Auth::check())
                  
                    <button class="bg-blue-500 text-white text-2xl rounded px-4 py-3"><a href="{{ url('/login') }}">Iniciar sesion</a></button>
                    <button class="bg-blue-500 text-white text-2xl rounded px-4 py-3"> <a href="{{ url('/register') }}">¡Resgistrate!s</a></button>
                @endif
                    
                </div>


            </div>
            <div class="bg-white xl:w-7/12 lg:w-7/12 hidden lg:block">
                <div class="ml-36 w-1/2">
                    <div style="position: relative; width: 100%; height: 0; padding-top: 100.0000%;
                            padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
                            border-radius: 8px; will-change: transform;">
                        <iframe loading="lazy"
                            style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
                            src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFlWpdSnPk&#x2F;view?embed"
                            allowfullscreen="allowfullscreen" allow="fullscreen">
                        </iframe>
                    </div>
                    
                </div>

            </div>

        </section>
        
        <footer>© Copyright {{date('Y')}}
            Los logotipos son marcas comerciales de sus respectivos propietarios. {{date('Y')}}</footer>
    </div>
    
    @livewireScripts

    
</body>


</html>
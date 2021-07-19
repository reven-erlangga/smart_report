<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        @hasSection('title')
            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif
        
        <!-- Favicon -->
		<link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @livewireStyles
        @stack('styles')

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="{{ asset('js/init-alpine.js') }}"></script>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
        <div
          class="flex h-screen bg-gray-50 dark:bg-gray-900"
          :class="{ 'overflow-hidden': isSideMenuOpen }">
            @include('layouts.sidebar')

            <div class="flex flex-col flex-1 w-full">
                @include('layouts.header')
                
                <main class="h-full overflow-y-auto">
                    @yield('body')
                </main>
            </div>

            @livewireScripts
            @stack('scripts')
        </div>
    </body>
</html>

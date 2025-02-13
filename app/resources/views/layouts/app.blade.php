<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div x-data="{ sidebarOpen: true, mobileMenuOpen: false }"  class="flex h-screen bg-gray-100">

            <!-- Sidebar -->
            @include('layouts.sidebar')

            <!-- Main Content Area -->
            <div :class="{'ml-64': sidebarOpen, 'ml-16': !sidebarOpen}" class="flex-1 flex flex-col transition-all duration-300">

                <!-- Navigation -->
                @include('layouts.navbar')
               
                <!-- Page Heading -->
                @isset($header)
                    <header class="bg-white shadow w-full mt-16">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endisset

                <!-- Page Content -->
                <main class="flex-1 p-6 bg-gray-100">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>

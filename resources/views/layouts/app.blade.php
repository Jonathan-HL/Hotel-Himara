{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html> --}}



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href={{ asset("https://fonts.gstatic.com") }}>
    <link href={{ asset("https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap") }} rel="stylesheet">
    <link rel="stylesheet" href={{ asset("assets/css/bootstrap.css") }}>

    <link rel="stylesheet" href={{ asset("assets/vendors/iconly/bold.css") }}>

    <link rel="stylesheet" href={{ asset("assets/vendors/perfect-scrollbar/perfect-scrollbar.css") }}>
    <link rel="stylesheet" href={{ asset("assets/vendors/bootstrap-icons/bootstrap-icons.css") }}>
    <link rel="stylesheet" href={{ asset("assets/css/app.css") }}>
    <link rel="shortcut icon" href={{ asset("assets/images/favicon.svg") }} type="image/x-icon">
</head>

<body style="background-color: #edcb9a;">


    <div id="app">
    {{-- <div id="main"> --}}
        @include('partials.navbarBackoffice')
        <div id="main">
            @include('partials.hamburgerBackoffice')
            @yield('content')
        </div>

    </div>


    <script src={{ asset("assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js") }}></script>
    <script src={{ asset("assets/js/bootstrap.bundle.min.js") }}></script>

    <script src={{ asset("assets/vendors/apexcharts/apexcharts.js") }}></script>
    <script src={{ asset("assets/js/pages/dashboard.js") }}></script>

    <script src={{ asset("assets/js/main.js") }}></script>
</body>

</html>

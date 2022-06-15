<!DOCTYPE html>
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


        <style>
            .root {
                font-family: 'Nunito', sans-serif;
                background: #f7fafc;
                display: flex;
                flex-direction: column;
                min-height: 100vh;
            }

            .main {
                width: 100%;
            }

            .logo {
                width: 160px;
                display: inline-block;
            }

            .content {
                background: #fff;
                border-radius: 10px;
                padding: 10px;
                border: 1px solid #e7e7e7;
                box-shadow: 0px 1px 2px #e7e7e7a1;
            }

            .main-content-links {
                display: flex;
            }
            .main-content-block {
                border-right: 1px solid #e7e7e7;
                padding: 10px;
                text-align: center;
            }
            .main-content-block:last-of-type {
                border-right: none;
            }

            .main-content-link {
                display: flex;
                gap: 10px;
                align-items: center;
                font-size: 18px;
                justify-content: center;
            }
        </style>
    </head>
    <body class="root">
        @include('layouts.navigation')

        <main class="main max-w-7xl mx-auto px-4 mt-4">
            <section class="content">
                {{ $slot }}
            </section>
        </main>
    </body>
</html>

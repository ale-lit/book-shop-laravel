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
                padding: 20px;
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





            .content__header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                font-weight: bold;
            }

            .butt {
                font-weight: normal;
                transition: all .3s ease-in-out;
                border-radius: 5px;
                padding: 5px;
                color: #fff;
                background: #000;
                cursor: pointer;
                display: inline-block;
            }
            .butt:hover {
                opacity: .7;
            }

            .add-button {
                padding: 5px 10px;
            }
            .del-button {
                background: #df0000;
            }

            .table {
                width: 100%;
                margin: 25px 0;
            }
            .table th {
                text-align: left;
                padding: 4px 6px;
            }
            .table td {
                padding: 4px 6px;
                text-align: left;
            }
            .table th:last-child {
                text-align: right;
            }
            .table td:last-child {
                text-align: right;
            }
            .table tr:nth-child(even) {
                background: #f2f2f2;
            }
            .table tbody tr:hover {
                background: #e4e4e4;
            }

            .actions-buttons {
                display: flex;
                gap: 5px;
                justify-content: flex-end;
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

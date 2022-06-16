<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


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
            width: 50%;
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

    <main class="main max-w-7xl mx-auto px-4 mt-4 text-center">
        <a href="{{ route('main.index') }}" class="logo">
            <x-logo width="160" />
        </a>

        <section class="content">
            <div class="main-content-links">
                <div class="main-content-block">
                    <div class="main-content-link">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                            <path
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                            </path>
                        </svg>
                        <a href="{{ route('books.index') }}" class="underline">Книги</a>
                    </div>
                    <p>Список всех книг продаваемых в нашем книжном магазине</p>
                </div>

                <div class="main-content-block">
                    <div class="main-content-link">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                            <path
                                d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                            </path>
                            <path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <a href="{{ route('authors.index') }}" class="underline">Авторы</a>
                    </div>
                    <p>Список авторов публикующих свои книги в нашем магазине</p>
                </div>
            </div>
        </section>

        <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
            <div class="text-center text-sm text-gray-500 sm:text-left">
                <div class="flex items-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" class="-mt-px w-5 h-5 text-gray-400">
                        <path
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                        </path>
                    </svg>

                    <a href="#" class="ml-1 underline">
                        My Link
                    </a>
                </div>
            </div>

            <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>
        </div>
    </main>
</body>

</html>

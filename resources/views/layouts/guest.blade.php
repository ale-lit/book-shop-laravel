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
                max-width: 1100px;
                text-align: center;
                margin: auto;
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
        <header class="header">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Вход</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Регистрация</a>
                        @endif
                    @endauth
                </div>
            @endif
        </header>

        <main class="main">
            <a href="{{ route('main') }}">
                <svg width="160" data-name="Layer 2" id="Layer_2" viewBox="0 0 2050 2050" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:#4d4c78;}.cls-11,.cls-2{fill:#323150;}.cls-3{fill:#67baeb;}.cls-4{fill:#f44533;}.cls-5{fill:#de3226;}.cls-6{fill:#f4c23f;}.cls-7{fill:#f4a93f;}.cls-8{fill:#c8c2e9;}.cls-9{fill:#b9b1e0;}.cls-10{fill:#b11a31;}.cls-11{opacity:0.1;}.cls-12{fill:#83d0fb;}.cls-13{opacity:0.2;}.cls-14{fill:#fff;}.cls-15{fill:#231f20;}.cls-16{fill:#fad564;}.cls-17{fill:#dfdafd;}.cls-18{fill:#f46253;}</style></defs><title/><rect class="cls-1" height="120.02" rx="60" ry="60" width="1911.2" x="69.4" y="1589.3"/><path class="cls-2" d="M1920.6,1589.3H154.9c-.1,1.3-.1,2.6-.1,3.9h0a60,60,0,0,0,60,60.1H1980.4c.1-1.4.2-2.7.2-4h0A60,60,0,0,0,1920.6,1589.3Z"/><rect class="cls-3" height="1158.16" transform="translate(-147.9 290.1) rotate(-10)" width="273.3" x="1440.7" y="408"/><rect class="cls-3" height="1252.55" width="295.6" x="237.1" y="340.7"/><rect class="cls-4" height="1252.55" width="295.6" x="1017.2" y="340.7"/><polygon class="cls-5" points="1017.2 1593.2 1312.8 1593.2 1312.8 340.7 1262.8 340.7 1262.8 1536.4 1017.2 1536.4 1017.2 1593.2"/><rect class="cls-6" height="1166.42" width="242.6" x="532.7" y="426.8"/><path class="cls-7" d="M711.9,426.8V1371c0,98.9-80.2,179.2-179.2,179.2h0v43H775.3V426.8Z"/><rect class="cls-8" height="1089.46" width="242.6" x="774.6" y="503.8"/><path class="cls-9" d="M970.7,503.8v854.9c0,108.3-87.8,196.1-196.1,196.1h0v38.4h242.6V503.8Z"/><rect class="cls-1" height="87.09" width="295.6" x="237.1" y="538.2"/><rect class="cls-1" height="87.09" width="295.6" x="237.1" y="1308.7"/><rect class="cls-7" height="847.15" width="60.7" x="618.1" y="600.4"/><path class="cls-1" d="M950.7,678.9H841.1a20,20,0,0,1,0-40H950.7a20,20,0,0,1,0,40Z"/><path class="cls-1" d="M950.7,780.2H841.1a20,20,0,0,1,0-40H950.7a20,20,0,0,1,0,40Z"/><path class="cls-1" d="M950.7,881.4H841.1a20,20,0,0,1,0-40H950.7a20,20,0,0,1,0,40Z"/><path class="cls-1" d="M931.9,1488.6h-72a20,20,0,0,1,0-40h72a20,20,0,1,1,0,40Z"/><path class="cls-10" d="M1110.3,1401.7a20.1,20.1,0,0,1-20-20V552.3a20,20,0,0,1,40,0v829.4A20,20,0,0,1,1110.3,1401.7Z"/><path class="cls-10" d="M1219.6,1401.7a20,20,0,0,1-20-20V552.3a20,20,0,0,1,40,0v829.4A20.1,20.1,0,0,1,1219.6,1401.7Z"/><polygon class="cls-1" points="1786.1 1382.3 1786.1 1382.3 1517 1430 1524 1469.4 1793.1 1421.7 1786.1 1382.3"/><rect class="cls-1" height="40" transform="translate(-72.6 269.8) rotate(-10)" width="273.3" x="1363" y="528.3"/><polygon class="cls-1" points="1682.1 794.6 1682.1 794.6 1675.1 755.3 1675.1 755.3 1406 802.9 1406 802.9 1413 842.3 1413 842.3 1682.1 794.6"/><polygon class="cls-1" points="1748.8 1171.2 1741.8 1131.8 1472.6 1179.5 1479.6 1218.9 1479.6 1218.9 1748.8 1171.2"/><path class="cls-11" d="M447.3,1319.3V340.7h85.4V1593.2H237.1v-63.7h0C353.2,1529.5,447.3,1435.4,447.3,1319.3Z"/><path class="cls-11" d="M1611,393l-68.5,12.2L1701.2,1302c18.8,106-51.9,207.2-158,225.9l-8.6,1.6,9.1,51.6,269.2-47.6Z"/><rect class="cls-12" height="524.76" rx="32.4" ry="32.4" width="64.8" x="237.1" y="720.7"/><g class="cls-13"><rect class="cls-14" height="584.09" rx="36.1" ry="36.1" transform="translate(-143.8 271.3) rotate(-10)" width="72.2" x="1436.6" y="662.2"/><path class="cls-15" d="M1517.2,1242.9a36.6,36.6,0,0,1-36-30.3L1392,708.5a36.6,36.6,0,0,1,29.6-42.4,36.7,36.7,0,0,1,42.5,29.7l89.2,504.1a36.6,36.6,0,0,1-29.6,42.4v0A35.7,35.7,0,0,1,1517.2,1242.9ZM1428,666.6a33.4,33.4,0,0,0-6.2.6,35.4,35.4,0,0,0-28.7,41.2l89.2,504a35.6,35.6,0,0,0,41.2,28.8,35.4,35.4,0,0,0,28.7-41.1L1463,696A35.6,35.6,0,0,0,1428,666.6Z"/></g><rect class="cls-12" height="133.95" rx="32.4" ry="32.4" width="64.8" x="237.1" y="370.8"/><rect class="cls-16" height="586.49" rx="24.3" ry="24.3" width="48.6" x="532.7" y="446.9"/><rect class="cls-17" height="331.71" rx="23.2" ry="23.2" width="46.5" x="774.6" y="947.6"/><rect class="cls-17" height="57.13" rx="19.2" ry="19.2" width="121.3" x="774.6" y="503.8"/><rect class="cls-18" height="755.16" rx="19.4" ry="19.4" width="38.9" x="1017.2" y="503.8"/></svg>
            </a>

            <section class="content">
                {{ $slot }}
            </section>
        </main>
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

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
                <svg width="160" data-name="Layer 2" id="Layer_2" viewBox="0 0 2050 2050" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:#4d4c78;}.cls-11,.cls-2{fill:#323150;}.cls-3{fill:#67baeb;}.cls-4{fill:#f44533;}.cls-5{fill:#de3226;}.cls-6{fill:#f4c23f;}.cls-7{fill:#f4a93f;}.cls-8{fill:#c8c2e9;}.cls-9{fill:#b9b1e0;}.cls-10{fill:#b11a31;}.cls-11{opacity:0.1;}.cls-12{fill:#83d0fb;}.cls-13{opacity:0.2;}.cls-14{fill:#fff;}.cls-15{fill:#231f20;}.cls-16{fill:#fad564;}.cls-17{fill:#dfdafd;}.cls-18{fill:#f46253;}</style></defs><title/><rect class="cls-1" height="120.02" rx="60" ry="60" width="1911.2" x="69.4" y="1589.3"/><path class="cls-2" d="M1920.6,1589.3H154.9c-.1,1.3-.1,2.6-.1,3.9h0a60,60,0,0,0,60,60.1H1980.4c.1-1.4.2-2.7.2-4h0A60,60,0,0,0,1920.6,1589.3Z"/><rect class="cls-3" height="1158.16" transform="translate(-147.9 290.1) rotate(-10)" width="273.3" x="1440.7" y="408"/><rect class="cls-3" height="1252.55" width="295.6" x="237.1" y="340.7"/><rect class="cls-4" height="1252.55" width="295.6" x="1017.2" y="340.7"/><polygon class="cls-5" points="1017.2 1593.2 1312.8 1593.2 1312.8 340.7 1262.8 340.7 1262.8 1536.4 1017.2 1536.4 1017.2 1593.2"/><rect class="cls-6" height="1166.42" width="242.6" x="532.7" y="426.8"/><path class="cls-7" d="M711.9,426.8V1371c0,98.9-80.2,179.2-179.2,179.2h0v43H775.3V426.8Z"/><rect class="cls-8" height="1089.46" width="242.6" x="774.6" y="503.8"/><path class="cls-9" d="M970.7,503.8v854.9c0,108.3-87.8,196.1-196.1,196.1h0v38.4h242.6V503.8Z"/><rect class="cls-1" height="87.09" width="295.6" x="237.1" y="538.2"/><rect class="cls-1" height="87.09" width="295.6" x="237.1" y="1308.7"/><rect class="cls-7" height="847.15" width="60.7" x="618.1" y="600.4"/><path class="cls-1" d="M950.7,678.9H841.1a20,20,0,0,1,0-40H950.7a20,20,0,0,1,0,40Z"/><path class="cls-1" d="M950.7,780.2H841.1a20,20,0,0,1,0-40H950.7a20,20,0,0,1,0,40Z"/><path class="cls-1" d="M950.7,881.4H841.1a20,20,0,0,1,0-40H950.7a20,20,0,0,1,0,40Z"/><path class="cls-1" d="M931.9,1488.6h-72a20,20,0,0,1,0-40h72a20,20,0,1,1,0,40Z"/><path class="cls-10" d="M1110.3,1401.7a20.1,20.1,0,0,1-20-20V552.3a20,20,0,0,1,40,0v829.4A20,20,0,0,1,1110.3,1401.7Z"/><path class="cls-10" d="M1219.6,1401.7a20,20,0,0,1-20-20V552.3a20,20,0,0,1,40,0v829.4A20.1,20.1,0,0,1,1219.6,1401.7Z"/><polygon class="cls-1" points="1786.1 1382.3 1786.1 1382.3 1517 1430 1524 1469.4 1793.1 1421.7 1786.1 1382.3"/><rect class="cls-1" height="40" transform="translate(-72.6 269.8) rotate(-10)" width="273.3" x="1363" y="528.3"/><polygon class="cls-1" points="1682.1 794.6 1682.1 794.6 1675.1 755.3 1675.1 755.3 1406 802.9 1406 802.9 1413 842.3 1413 842.3 1682.1 794.6"/><polygon class="cls-1" points="1748.8 1171.2 1741.8 1131.8 1472.6 1179.5 1479.6 1218.9 1479.6 1218.9 1748.8 1171.2"/><path class="cls-11" d="M447.3,1319.3V340.7h85.4V1593.2H237.1v-63.7h0C353.2,1529.5,447.3,1435.4,447.3,1319.3Z"/><path class="cls-11" d="M1611,393l-68.5,12.2L1701.2,1302c18.8,106-51.9,207.2-158,225.9l-8.6,1.6,9.1,51.6,269.2-47.6Z"/><rect class="cls-12" height="524.76" rx="32.4" ry="32.4" width="64.8" x="237.1" y="720.7"/><g class="cls-13"><rect class="cls-14" height="584.09" rx="36.1" ry="36.1" transform="translate(-143.8 271.3) rotate(-10)" width="72.2" x="1436.6" y="662.2"/><path class="cls-15" d="M1517.2,1242.9a36.6,36.6,0,0,1-36-30.3L1392,708.5a36.6,36.6,0,0,1,29.6-42.4,36.7,36.7,0,0,1,42.5,29.7l89.2,504.1a36.6,36.6,0,0,1-29.6,42.4v0A35.7,35.7,0,0,1,1517.2,1242.9ZM1428,666.6a33.4,33.4,0,0,0-6.2.6,35.4,35.4,0,0,0-28.7,41.2l89.2,504a35.6,35.6,0,0,0,41.2,28.8,35.4,35.4,0,0,0,28.7-41.1L1463,696A35.6,35.6,0,0,0,1428,666.6Z"/></g><rect class="cls-12" height="133.95" rx="32.4" ry="32.4" width="64.8" x="237.1" y="370.8"/><rect class="cls-16" height="586.49" rx="24.3" ry="24.3" width="48.6" x="532.7" y="446.9"/><rect class="cls-17" height="331.71" rx="23.2" ry="23.2" width="46.5" x="774.6" y="947.6"/><rect class="cls-17" height="57.13" rx="19.2" ry="19.2" width="121.3" x="774.6" y="503.8"/><rect class="cls-18" height="755.16" rx="19.4" ry="19.4" width="38.9" x="1017.2" y="503.8"/></svg>
            </a>

            <section class="content">
                <div class="main-content-links">
                    <div class="main-content-block">
                        <div class="main-content-link">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                            <a href="{{ route('books.index') }}" class="underline">Книги</a>
                        </div>
                        <p>Список всех книг продаваемых в нашем книжном магазине</p>
                    </div>

                    <div class="main-content-block">
                        <div class="main-content-link">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <a href="{{ route('authors.index') }}" class="underline">Авторы</a>
                        </div>
                        <p>Список авторов публикующих свои книги в нашем магазине</p>
                    </div>
                </div>
            </section>

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="-mt-px w-5 h-5 text-gray-400">
                            <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
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

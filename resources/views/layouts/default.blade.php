<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TI Coffee</title>
    <script src="https://cdn.tailwindcss.com"></script>

    @yield('styles')

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--====== Favicon Icon ======-->
    {{-- <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png"> --}}

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="assets/css/responsive.css">



</head>

<body>
    <div id="app">
        <header class="text-gray-600">
            <div class="container mx-auto flex justify-between items-center p-5 items-center">
                <a href="/" class="flex title-font font-medium items-center text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2"
                        class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                        <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                        <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                        <path d="M6 1v3"></path>
                        <path d="M10 1v3"></path>
                        <path d="M14 1v3"></path>
                        {{-- <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path> --}}
                    </svg>
                    <span class="ml-3 text-xl">TI Coffee</span>
                </a>
                <div class="flex items-center">
                    {{-- <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                        <a href="/" class="mr-5 hover:text-gray-900">Home</a>
                    </nav> --}}
                    {{-- <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                        <a href="/"class="mr-5 hover:text-gray-900">Pedidos</a> --}}
                    {{-- <a href="{{ route('admin.products') }}"class="mr-5 hover:text-gray-900">Pedidos</a> --}}
                    {{-- </nav> --}}
                    {{-- <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                        <a href="/"class="mr-5 hover:text-gray-900">Clientes</a> --}}
                    {{-- <a href="{{ route('client.clients') }}"class="mr-5 hover:text-gray-900">Clientes</a> --}}
                    {{-- </nav> --}}

                    @if (Route::has('login'))
                        <div class="flex items-center">
                            @auth
                                <a href="{{ route('admin.products') }}"
                                    class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base md:mt-0">Admin
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            <cart />
                            @else
                                <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                                    <a href="{{ route('login') }}" class="mr-5 hover:text-gray-900">Log in</a>
                                </nav>
                                @if (Route::has('register'))
                                    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                                        <a href="{{ route('register') }}" class="mr-5 hover:text-gray-900">Cadastrar</a>
                                    </nav>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </header>

        @yield('content')
    </div>
    <footer class="text-gray-600">
        <div class="border-t border-gray-200">
            <div class="bg-gray-100">
                <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                    <p class="text-gray-500 text-sm text-center sm:text-left">© 2022 Tailblocks —
                        <a href="https://github.com/tiagodalmeida" class="text-gray-600 ml-1" target="_blank"
                            rel="noopener noreferrer">@tiagodalmeida87</a>
                    </p>

                    <span class="inline-flex lg:ml-auto lg:mt-0 mt-6 w-full justify-center md:justify-start md:w-auto">
                        <a href="https://www.linkedin.com/in/tiagodalmeida87/" class="ml-3 text-gray-500"
                            target="_blank">
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                                <path stroke="none"
                                    d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                                </path>
                                <circle cx="4" cy="4" r="2" stroke="none"></circle>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/tiagodalmeida87/" class="ml-3 text-gray-500" target="_blank">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <rect width="20" height="20" x="2" y="2" rx="5"
                                    ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                            </svg>
                        </a>
                    </span>
                </div>
            </div>
    </footer>

    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== nav js ======-->
    <script src="assets/js/jquery.nav.js"></script>

    <!--====== Nice Number js ======-->
    <script src="assets/js/jquery.nice-number.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

    @yield('scripts')

    <script>
        window.onbeforeunload = function() {
            window.scrollTo(0, 0);
        }
    </script>

</body>

</html>

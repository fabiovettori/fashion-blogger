<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fashion News - @yield('title')</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <link href="https://kit-pro.fontawesome.com/releases/v5.15.2/css/pro.min.css" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <nav id="guest-sidebar">
            <a href="{{ route('home') }}" class="site-info">
                <img src="{{asset('images/logo.jpg')}}" alt="creative logo" id="company-logo">
            </a>

            <div class="site-controls">
                <ul class="list-unstyled">
                    <li>
                        <a href="#" class="text-capitalize">dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="text-capitalize">news</a>
                    </li>
                    <li>
                        <a href="#" class="text-capitalize">shop</a>
                    </li>
                    <li>
                        <a href="#" class="text-capitalize">message</a>
                    </li>
                    <li>
                        <a href="#" class="text-capitalize">notification</a>
                    </li>
                </ul>
            </div>

            <div class="user-identification">
                <div id="social">
                    <a href="#">
                        <span class="fab fa-facebook-f"></span>
                    </a>
                    <a href="#">
                        <span class="fab fa-instagram"></span>
                    </a>
                    <a href="#">
                        <span class="fab fa-tiktok"></span>
                    </a>
                    <a href="#">
                        <span class="fab fa-pinterest-p"></span>
                    </a>
                </div>
                <ul class="list-unstyled">
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </nav>

        <header id="guest-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 d-flex align-items-center">
                        <input type="text" name="" value="" placeholder="Search Site">
                    </div>

                    @if (Route::has('login'))
                        <div class="col-6" id="header-links">
                            @auth
                                <a href="{{ route('home') }}">View Site</a>
                            @else
                                <div class="links">
                                    <a href="{{ route('contacts') }}">Contacts</a>
                                    <a href="{{ route('about') }}">About us</a>
                                    <a href="{{ route('faq') }}" class="text-uppercase">faq</a>
                                </div>

                                <div class="user">
                                    <a href="{{ route('login') }}" class="mr-3">
                                        <i class="fad fa-user"></i>
                                        Login
                                    </a>

                                    @if (Route::has('register'))
                                        <div id="register">
                                            <a href="{{ route('register') }}">Register</a>
                                        </div>
                                    @endif
                                </div>
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </header>

        <main id="guest-main">
            @yield('guest-content')
        </main>
    </body>
</html>

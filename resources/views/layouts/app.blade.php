<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/chat.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <input class="menuinput" type="checkbox" id="navcheck" role="button" title="menu">
            <label class="menulabel" for="navcheck" aria-hidden="true" title="menu">
                <div class="menubackground">
                    <span class="burger">
                        <span class="bar">
                            <span class="visuallyhidden">Menu</span>
                        </span>
                    </span>
                </div>
            </label>
            <nav id="menu">
                @guest
                <a href='{!! url('/vacancies'); !!}'>Job vacancies</a>
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
                @else
                <a href='{!! url('/vacancies'); !!}'>Job vacancies</a>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href='{!! url('/profile'); !!}'>Profile</a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                @endguest
            </nav>
            <div class="content">
                @yield('content')
            </div>
        </div>

        <!-- Scripts -->
        <script src="js/app.js"></script>
    </body>
</html>

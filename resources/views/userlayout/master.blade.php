<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css-user/style.css">

        <title>
            {{config('app.name')}}
        </title>


    </head>
    <body>
        <header>
            <div class="logo">
                <a href="{{route('landingpage')}}" id="logo">
                    {{config('app.name')}}
                </a>
            </div>
            <div class="search">
                <input type="search" name="search" id="serach">
            </div>
            <div class="navbar">
                <a href="#home">home</a>
                <a href="#services">services</a>
                <a href="#contact">contact</a>
            </div>
            <div class="getin">

                @if (Route::has('login'))
                <nav class="-mx-3 flex flex-1 justify-end">
                    @auth
                        <a href="{{ route('dashboard') }}">
                            {{Auth::user()->name}}
                        </a>
                    @else
                        <a href="{{ route('login') }}">
                            Login
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
                    @endif
            </div>
        </header>

        @yield('contant')


        <footer>
            <ul>
                <li>
                    spocialmedia
                </li>
                <li>facebook</li>
                <li>instegram</li>
                <li>snapchat</li>
            </ul>
            <ul>
                <li>
                    spocialmedia
                </li>
                <li>facebook</li>
                <li>instegram</li>
                <li>snapchat</li>
            </ul>
            <ul>
                <li>
                    spocialmedia
                </li>
                <li>facebook</li>
                <li>instegram</li>
                <li>snapchat</li>
            </ul>
        </footer>
    </body>
</html>

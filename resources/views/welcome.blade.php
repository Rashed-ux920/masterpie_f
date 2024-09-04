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
    <body class="">
        <header>
            <div class="logo">
                <a href="#" id="logo">
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

        <hr>

        <section id="home">
            <div class="contaner">
                <div class="left">
                    <img src="" alt="909">
                </div>
                <div class="right">
                    <div class="card">
                        {{-- <img src="#" alt="505"> --}}
                        <h2>title</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur,<br>
                            adipisicing elit. Itaque iste at magnam optio<br>
                            accusantium sequi architecto labore dignissimos<br>
                            enim quidem illum commodi sapiente ratione qui.
                        </p>
                        <a href="#" class="links">show</a>
                    </div>
                </div>
            </div>
        </section>

        <hr>

        <section id="services">
            <div class="contaner">
                <div class="card">
                    <img src="#" alt="505">
                    <h2>title</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur,<br>
                        adipisicing elit. Itaque iste at magnam optio<br>
                        accusantium sequi architecto labore dignissimos<br>
                        enim quidem illum commodi sapiente ratione qui.
                    </p>
                    <a href="#" class="links">show</a>
                </div>
                <div class="card">
                    <img src="#" alt="505">
                    <h2>title</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur,<br>
                        adipisicing elit. Itaque iste at magnam optio<br>
                        accusantium sequi architecto labore dignissimos<br>
                        enim quidem illum commodi sapiente ratione qui.
                    </p>
                    <a href="#" class="links">show</a>
                </div>
                <div class="card">
                    <img src="#" alt="505">
                    <h2>title</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur,<br>
                        adipisicing elit. Itaque iste at magnam optio<br>
                        accusantium sequi architecto labore dignissimos<br>
                        enim quidem illum commodi sapiente ratione qui.
                    </p>
                    <a href="#" class="links">show</a>
                </div>
                <div class="card">
                    <img src="#" alt="505">
                    <h2>title</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur,<br>
                        adipisicing elit. Itaque iste at magnam optio<br>
                        accusantium sequi architecto labore dignissimos<br>
                        enim quidem illum commodi sapiente ratione qui.
                    </p>
                    <a href="#" class="links">show</a>
                </div>
                <div class="card">
                    <img src="#" alt="505">
                    <h2>title</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur,<br>
                        adipisicing elit. Itaque iste at magnam optio<br>
                        accusantium sequi architecto labore dignissimos<br>
                        enim quidem illum commodi sapiente ratione qui.
                    </p>
                    <a href="#" class="links">show</a>
                </div>

            </div>
        </section>

        <hr>

        <section id="contact">
            <form action="#" method="post" class="form-1">
                <div class="left">
                    <input type="text" name="name" id="name" placeholder="Enter your name pleas">
                    <br>
                    <input type="email" name="email" id="email" placeholder="Enter your email pleas like: example@gmail.com">
                </div>
                <div class="right">
                    <textarea name="massge" id="massge" cols="25" rows="3"></textarea>
                    <br>
                    <button type="submit">send</button>
                </div>
            </form>
        </section>



        <hr>

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

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
            <div class="navbar">
                <a href="#">home</a>
                <a href="#">services</a>
                <a href="#">contact</a>
            </div>
            <div class="getin">

                @if (Route::has('login'))
                <nav class="-mx-3 flex flex-1 justify-end">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class=""
                            >
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
                    @endif

            </div>
        </header>

    </body>
</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pokedex') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<div id="app">
<body style="background: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/cad4b52e-f6b1-432f-9035-a5f4853bcf15/d7i3cm4-dc9f4577-6b7d-4d59-8b46-a15bf5e84209.gif?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvY2FkNGI1MmUtZjZiMS00MzJmLTkwMzUtYTVmNDg1M2JjZjE1XC9kN2kzY200LWRjOWY0NTc3LTZiN2QtNGQ1OS04YjQ2LWExNWJmNWU4NDIwOS5naWYifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.dyJK_tsE0i541YXen2Y4-FT6ZwE_NNMf6BTX_CYynfY') no-repeat center center fixed;  background-size: cover;">
    <div id="app">
        <nav class="flex items-center justify-between flex-wrap bg-red-700 p-6">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/73059838-a3f0-40f2-83b3-183538d7c092/d8hwdh9-ef3ca51a-576c-4d3c-a43a-c5ff20b8b8a7.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvNzMwNTk4MzgtYTNmMC00MGYyLTgzYjMtMTgzNTM4ZDdjMDkyXC9kOGh3ZGg5LWVmM2NhNTFhLTU3NmMtNGQzYy1hNDNhLWM1ZmYyMGI4YjhhNy5wbmcifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.vUhv2Ps1G5R7CVKpj1ivSkSyW01zwFNvFnaZ-NBI4HM" class="fill-current h-8 w-8 mr-2" width="54" height="54"/>
              <span class="font-semibold text-xl tracking-tight">POKEDEX</span>
            </div>
                <!--<a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'POKEDEX') }}
                </a>-->
                <div class="block lg:hidden">
                    <button class="flex items-center px-3 py-2 border rounded text-white border-teal-400 hover:text-white hover:border-white">
                      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                    </button>
                </div>

            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
              <div class="text-sm lg:flex-grow">
                    <!-- Right Side Of Navbar -->
                        <!-- Authentication Links -->
                        @guest

                                <a class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-white mr-4" href="{{ route('login') }}">{{ __('LOGIN') }}</a>

                            @if (Route::has('register'))

                                    <a class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-white mr-4" href="{{ route('register') }}">{{ __('REGISTER') }}</a>

                            @endif
                        @else

                                    <a id="navbarDropdown" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-white mr-4" href="#" role="button">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <a class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-white mr-4" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('LOGOUT') }}
                                    </a>

                                    <a class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-white mr-4" href="/users"
                                        onClick="javascript:window.location.href='/users'" > USERS
                                    </a>

                                    <a class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-white mr-4" href="/pokemons"
                                        onClick="javascript:window.location.href='/pokemons'" > POKEMONS
                                    </a>

                                    <a class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-white mr-4" href="/users/me/team" style="float: right;"
                                        onClick="javascript:window.location.href='/users/me/team'" > Page de {{ auth()->user()->username }}
                                    </a>


                                    <form class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-white mr-4" id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                        @endguest
                </div>
            </div>
        </nav>

        <main class="py-4">


            @yield('content')


        </main>
    </div>
    </div>
</body>
</html>

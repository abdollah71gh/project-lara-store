<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
<div id="app">
   @auth()
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Brand/logo -->


            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('setting.create')}}">setting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('slider.create')}}">slider</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about.create')}}">about</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('gallery.create')}}">gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('show')}}">show_website</a>
                </li>
                <li>
                    <a class="dropdown-item align-middle text-light bg-danger" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
    @endauth
       <br>
    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>

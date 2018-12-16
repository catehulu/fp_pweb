<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous">
    </script>

    <!-- bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tampilan.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('compawny_logo_tv2_1.ico') }}">
</head>
<body>
    <div id="app">
        <nav style="font-size:20px" class="navbar navbar-expand-lg navbar-laravel warnaNavbar">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('storage/compawny_logo.png')}}" alt="Logo" style="width:10vh;">
                  </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav mr-auto nav-pills" style="padding:5px;">
                            <li class="nav-item">
                              <a class="nav-link" href="{{route('user.index')}}">Sedang Tayang</a>
                            </li>
                            @auth
                                <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.index')}}">List Film</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.transaksi')}}">History Transaksi</a>
                                </li>
                            @endauth
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav ml-auto nav-tabs nav-pills">
                        <!-- Authentication Links -->
                        @guest
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            @include('layouts.messages')
        </div>
        <main class="py-4">
            
            @yield('content')
        </main>
    </div>
</body>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous">
</script>
</html>

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
    <script src="{{ asset('js/script.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    @include('cookieConsent::index')
</head>
<body>
<header>
    <div class="title">
        <a href="/"><img src="/css/logo1.jpg" alt="logo" height="75"></a>
    </div>

    @if ($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/home' || $_SERVER['REQUEST_URI'] == '/product' || $_SERVER['REQUEST_URI'] == '/product/')
        <div style="justify-content: center">
            <input type="text" placeholder="Search.." style="width:250px" name="name">
            <button type="submit" style="height:30px"><i class="fa fa-search"></i></button>
        </div>
    @else
        <h1 style="padding-left: 175px">Easy Buy </h1>
    @endif
    <nav class="nav">
        <ul>
            <li><button style="background-color:white; border: none  ;" onclick="window.location='{{url("http://localhost:8000/shoppingCart")}}'" class="active" href=""><i class="fa fa-shopping-cart" style="font-size:24px"></i></button></li>
            <li><i class="fa fa-user" style="font-size:24px"></i></li>
            @guest
                <li>
                    <a style="font-size: 24px" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li>
                        <a style="font-size: 24px" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li>
                    <a id="user1" style="font-size: 24px"> {{ Auth::user()->name }}</a>
                </li>
                <li>
                    <a style="font-size: 24px" class="dropdown-item"  href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          style="display: none;">
                        @csrf
                    </form>
                </li>
            @endguest
        </ul>
    </nav>
</header>
<main class="py-4">
    @yield('content')
</main>
</body>
@if($_SERVER['REQUEST_URI'] == '/home' || $_SERVER['REQUEST_URI'] == '/' )
    <footer>
        <div>
            <a href="" class="fa fa-facebook"></a>
            <a href="" class="fa fa-twitter"></a>
            <div class="inline, right">&#9400; Bechar Enzo, Milleret Jules-Yann</div>
        </div>
    </footer>
@endif
</html>

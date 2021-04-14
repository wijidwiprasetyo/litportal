<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','Litportal')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Bootstrap CSS -->
    {{--  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">  --}}
    {{-- <link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" /> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('front/css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/home.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/footer.css')}}">

    <!-- Bootstrap CSS -->
    <link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Ubuntu:wght@700&display=swap" rel="stylesheet">


</head>
<body>
    <div id="app">
        {{--  awal navbar  --}}
        <nav class="navbar navbar-expand-md shadow-sm custom-nav">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('front/img/logo-litportal-no bg.png')}}" alt="logo_litportal" sizes="" srcset="" />
                    <span>Litportal</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link @yield('menuHome')" href="/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('menuTryout')" href="/tryout">TryOut</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('menuCourse')" href="/course">Course</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('menuBlog')" href="/blog">Blog</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    {{--  sistem logout  --}}
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    {{--  akhir sistem logout  --}}
                </div>
            </div>
        </nav>
        {{--  akhir navbar  --}}

        {{--  awal konten  --}}
        <main class="py-4">
            @yield('content')
        </main>
        {{--  akhir konten  --}}

        <footer class="py-3">
            {{--  awal footer  --}}
            @yield('footer')
            {{--  akhir footer  --}}
        </footer>
    </div>

</body>
</html>

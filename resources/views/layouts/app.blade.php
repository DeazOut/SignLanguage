<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SignLanguage</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
    <nav class="navbar" style="background-color: #2F4454">
  <div class="container-fluid">
    <a class="navbar-brand" style="color: white" href="{{route('welcome.index')}}">Sign Language</a>
    <button class="navbar-toggler"  style="background-color: white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Навигация</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>


      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('welcome.index')}}">Главная</a>
          </li>
          

          
          <li class="nav-item dropdown"> 
            <ul class="navbar-nav ms-auto">
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

                            <li class="nav-item">
                                        <a class="dropdown-item  mb-1" href="{{route('lessons')}}">Страница уроков</a>
                                  </li>
                                  <li class="nav-item">
                                        <a class="dropdown-item" href="{{route('dictionary')}}">Словарь</a>
                                  </li>

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('profile') }}"> Профиль</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       >
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" method="POST" action="{{ route('logout') }}"  class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
            
          </li>
        </ul>
      </div>


    </div>
  </div>
</nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

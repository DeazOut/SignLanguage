<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'scss/custom.scss'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>SignLanguage</title>
</head>
<body>
    
<nav class="navbar sticky-top "  style="background-color: #2F4454">
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
                            <li class="nav-item mb-1">
                                        <a class="dropdown-item " href="{{route('dictionary')}}">Словарь</a>
                                </li>
                                <li class="nav-item">
                                        <a class="dropdown-item mb-1" href="{{route('lessons')}}">Страница уроков</a>
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

      




      <main class="container-fluid text-white p-3 d-flex flex-column" style="width: 100%; height: 100%; background-color: #376E6F;">

        <header class="container-fluid d-flex justify-content-start" style="width: 100%; color: #2E151B; ">
          @yield('header')
        </header>
        <section>
        @yield('content')
        </section>
        
        

      </main>
      
    <footer class=" text-white" style="background-color: #2F4454">

      <div class="container-fluid d-flex flex-nowrap justify-content-around gap-5 p-3">

            <div class="container">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Навигация</h5>
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{route('welcome.index')}}">Главная</a>
                </li>
                <li class="nav-item">
                  <a class="dropdown-item mb-1" href="{{route('dictionary')}}">Словарь</a>
                </li>
                

                
                <li class="nav-item"> 
                  <ul class="navbar-nav ms-auto">
                              <!-- Authentication Links -->
                              @guest
                                  @if (Route::has('login'))
                                      <li class="nav-item">
                                          <a class="nav-link mb-1" href="{{ route('login') }}">{{ __('Login') }}</a>
                                      </li>
                                  @endif

                                  @if (Route::has('register'))
                                      <li class="nav-item">
                                          <a class="nav-link mb-1" href="{{ route('register') }}">{{ __('Register') }}</a>
                                      </li>
                                  @endif
                              @else
                                  <li class="nav-item dropdown">
                                  <li class="nav-item">
                                        <a class="dropdown-item mb-1" href="{{route('lessons')}}">Страница уроков</a>
                                  </li>
                                      <a class="dropdown-item mb-1" href="{{ route('profile') }}"> Профиль</a>
                                          <a class="dropdown-item" href="{{ route('logout') }}"
                                            >
                                              {{ __('Logout') }}
                                          </a>

                                          <form id="logout-form" method="POST" action="{{ route('logout') }}"  class="d-none">
                                              @csrf
                                          </form>                   
                                  </li>
                              @endguest
                          </ul>
                  
                </li>
              </ul>
            </div>
      

        <div class="container d-flex align-items-end justify-content-end">
          <h5> ШВБ Любушин Владимир, 2025</h5>
        </div>

      </div>
        
    </footer>


  

</body>

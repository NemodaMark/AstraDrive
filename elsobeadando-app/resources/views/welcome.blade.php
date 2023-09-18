<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- start css and stylesheets --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link rel="icon" type="image/x-icon" href="{{asset('imgs/favicon.ico')}}">
    {{-- end --}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <style>
        video {
        object-fit: fill; /* use "cover" to avoid distortion */
        position: absolute;
        pointer-events: none;
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
        filter: brightness(50%);
        z-index:-1;
        }
        .btconatiner{
            height: 700px;
            width: 2000px;
            /* border: 1px solid red; */
            display: table-cell;
            vertical-align: bottom;
        }
        .tab {
            display: inline-block;
            margin-left: 8.5rem;
        }
        #buttons{
            /* border: 1px solid green; */
            height: 50px;
        }
    </style>

    <video preload="auto" preload muted autoplay loop>
        <source src="{{asset('bgvideo.mp4')}}" type="video/mp4">
    </video>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-transparent shadow-sm">
            <div class="container">
                    <a href="{{ url('/') }}"><img src="{{asset('imgs/logoLight.png')}}" id="navbarIcon" alt="opel logo" style="max-width: 23rem; max-height: 2rem;"></a>
                {{-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> --}}
                {{-- <img src="{{asset('imgs/opelLogo.jpg')}}" id="navbarLogo" alt="Opel logo"> --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                      </svg></a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                                      </svg></a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="btconatiner">
                <div class="row align-items-end">
                    <div class="col"></div>
                    <div class="col" id="buttons">
                        <a name="" id="" class="btn btn-light opacity-75 btn-lg" href="#" role="button">Nézd meg az oktató anyagot</a>
                        <span class="tab"></span>
                        <a name="" id="" class="btn btn-dark opacity-75 btn-lg mx-10" href="#" role="button">Teszteld a tudásod</a>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </main>
    </div>
<!--BGMUSIC-->
<audio id="bgmusic" preload autoplay loop>
        <source src="{{asset('bgmusic.mp3')}}" type="audio/mpeg">
            <script>
                var audio = document.getElementById("bgmusic");
                audio.volume = 0.08;
                audio.controls = false;
              </script>
</audio>
</body>
</html>

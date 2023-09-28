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
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3/dist/js.cookie.min.js"></script>

</head>
<body>

    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3/dist/js.cookie.min.js"></script>
    <script>
    const themeSwitcher = document.getElementById('btnSwitch');
    const currentTheme = document.documentElement.getAttribute('data-bs-theme');

    // Function to toggle the theme
    const toggleTheme = () => {
        if (currentTheme === 'light') {
            document.documentElement.setAttribute('data-bs-theme', 'dark');
            document.getElementById('navbarIcon').src = "{{ asset('imgs/logoLight.png') }}";
            Cookies.set('theme', 'dark'); // Save the theme in a cookie
        } else {
            document.documentElement.setAttribute('data-bs-theme', 'light');
            document.getElementById('navbarIcon').src = "{{ asset('imgs/logo.png') }}";
            Cookies.set('theme', 'light'); // Save the theme in a cookie
        }
    };

    // Event listener for theme switcher button
    themeSwitcher.addEventListener('click', toggleTheme);

    // Check if a theme cookie exists and set the theme accordingly
    const savedTheme = Cookies.get('theme');
    if (savedTheme) {
        document.documentElement.setAttribute('data-bs-theme', savedTheme);
        if (savedTheme === 'dark') {
            document.getElementById('navbarIcon').src = "{{ asset('imgs/logoLight.png') }}";
        } else {
            document.getElementById('navbarIcon').src = "{{ asset('imgs/logo.png') }}";
        }
    }
    </script>

    <style>
        video {
        object-fit: cover;
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

        .phone-video {
        width: 50%; /* Adjust this value as needed */
        height: 50%; /* Adjust this value as needed */
    }
        .tab {
            display: inline-block;
            margin-left: 8.5rem;
        }

        body {
            overflow-y: hidden; /* Hide vertical scrollbar */
            overflow-x: hidden; /* Hide horizontal scrollbar */
        }
        .bottom-buttons {
            position: absolute;
            bottom: 10%;
            left: 50%;
            transform: translateX(-50%);
            width: 90%;
        }
    </style>


<video id="bgvideo" preload="auto" muted autoplay loop type="video/mp4"></video>

<script type="text/javascript">
    function gcd(a, b) {
        return b == 0 ? a : gcd(b, a % b);
    }

    function setVideoSource() {
        var w = screen.width;
        var h = screen.height;
        var r = gcd(w, h);

        console.log("<pre>");
        console.log("Dimensions = ", w, " x ", h, "<br>");
        console.log("Gcd        = ", r, "<br>");
        console.log("Aspect     = ", w / r, ":", h / r);
        console.log("</pre>");

        var videoElement = document.getElementById("bgvideo");

        if (w / h !== 16 / 9 && w / h !== 4 / 3) {
    videoElement.src = "phone.mp4";
    videoElement.classList.add("phone-video");
    //resize the video to fit in
} else if (w / h === 4 / 3) {
    videoElement.src = "pc.mp4"; // Replace with the actual video file path
    videoElement.classList.add("phone-video");

} else {
    // Set the source to the PC video for other aspect ratios
    videoElement.src = "pc.mp4"; // Replace with the actual video file path
}


        // Load and play the selected video
        videoElement.load();
        videoElement.play();
    }

    // Wait for the DOM to be fully loaded before running the code
    document.addEventListener("DOMContentLoaded", setVideoSource);
</script>

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

                        <a class="nav-link" href="{{route('copyright')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-c-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM8.146 4.992c.961 0 1.641.633 1.729 1.512h1.295v-.088c-.094-1.518-1.348-2.572-3.03-2.572-2.068 0-3.269 1.377-3.269 3.638v1.073c0 2.267 1.178 3.603 3.27 3.603 1.675 0 2.93-1.02 3.029-2.467v-.093H9.875c-.088.832-.75 1.418-1.729 1.418-1.224 0-1.927-.891-1.927-2.461v-1.06c0-1.583.715-2.503 1.927-2.503Z"/>
                          </svg></a>

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
                        <li class="nav-item">
                        </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('home') }}">
                                        {{ __('Garázs') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Kijelentkezem') }}
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
            <div class="bottom-buttons">
                <div class="row align-items-end text-center">
                    <div class="col-3"></div>
                    <div class="col-6" id="buttons">
                        <a name="" id="" class="btn btn-dark opacity-75 btn-lg mx-3 my-2" href="{{route('quiz')}}" role="button">Teszteld a tudásod</a>
                        <a name="" id="" class="btn btn-light opacity-75 btn-lg mx-3 my-2" href="{{route('informations')}}" role="button">Nézd meg az oktató anyagot</a>
                    </div>
                    <div class="col-3"></div>
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

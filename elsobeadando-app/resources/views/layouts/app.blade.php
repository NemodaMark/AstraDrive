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

{{--
s.com/css2?family=Noto+Sans&display=swap');
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Noto Sans', sans-serif
    }

        .profile{
            max-width: 3rem;
            max-height: 3rem;
            border-radius: 50%
        }
    </style> --}}

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-transparent shadow-sm">
            <div class="container">
                    <a href="{{ url('/') }}"><img src="{{asset('imgs/logo.png')}}" id="navbarIcon" alt="opel logo" style="max-width: 23rem; max-height: 2rem;"></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item ms-5">
                            <a class="nav-link" href="{{route('informations')}}">Astra-lógia</a>
                          </li>

                          <li class="nav-item ms-2">
                            <a class="nav-link" href="{{route('quiz.show')}}">Teszt</a>
                          </li>
                    </ul>

                    <!-- Right Side Of Navbar -->

                    <ul class="navbar-nav ms-auto">
                        <a class="nav-link" href="{{route('copyright')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-c-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM8.146 4.992c.961 0 1.641.633 1.729 1.512h1.295v-.088c-.094-1.518-1.348-2.572-3.03-2.572-2.068 0-3.269 1.377-3.269 3.638v1.073c0 2.267 1.178 3.603 3.27 3.603 1.675 0 2.93-1.02 3.029-2.467v-.093H9.875c-.088.832-.75 1.418-1.729 1.418-1.224 0-1.927-.891-1.927-2.461v-1.06c0-1.583.715-2.503 1.927-2.503Z"/>
                          </svg></a>

                        <!--Dark Mode begin-->
                        <html data-bs-theme="light">
                            <button class="nav-link" id="btnSwitch"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brightness-alt-high-fill" viewBox="0 0 16 16">
                                <path d="M8 3a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 3zm8 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zm-13.5.5a.5.5 0 0 0 0-1h-2a.5.5 0 0 0 0 1h2zm11.157-6.157a.5.5 0 0 1 0 .707l-1.414 1.414a.5.5 0 1 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm-9.9 2.121a.5.5 0 0 0 .707-.707L3.05 5.343a.5.5 0 1 0-.707.707l1.414 1.414zM8 7a4 4 0 0 0-4 4 .5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5 4 4 0 0 0-4-4z"/>
                              </svg></button>

                              <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    // Function to check the current theme and update the card background color and box-shadow
                                    const checkTheme = () => {
                                        const currentTheme = document.documentElement.getAttribute('data-bs-theme');
                                        const cardElement = document.getElementById('profile');
                                        const buttonElements = document.querySelectorAll('.neo-button');

                                        if (currentTheme === 'light') {
                                            console.log('Current theme is light');
                                            cardElement.style.backgroundColor = '#e4e5f1';
                                            cardElement.style.boxShadow = '9px 9px 18px #484b6a, -5px -5px 18px #fafafa';

                                            buttonElements.forEach(button => {
                                                button.style.backgroundColor = '#e4e5f1'
                                                button.style.boxShadow = '4px 4px 16px #484b6a, -1px -1px 8px #fafafa';
                                                // Handle :active state using mousedown and mouseup events
                                                button.addEventListener('mousedown', () => {
                                                    button.style.boxShadow = '6px 6px 27px #484b6a, -6px -6px 27px #fafafa';
                                                });
                                                button.addEventListener('mouseup', () => {
                                                    button.style.boxShadow = '4px 4px 16px #484b6a, -1px -1px 8px #fafafa';
                                                });
                                            });
                                        } else {
                                            console.log('Current theme is dark');
                                            cardElement.style.backgroundColor = '#30363d'; /*card body*/
                                            cardElement.style.boxShadow = '9px 9px 18px #11111b, -5px -5px 18px #1e1e26'; /*DARK*/

                                            buttonElements.forEach(button => {
                                                button.style.backgroundColor = '#30363d'
                                                button.style.boxShadow = '1px 1px 8px #11111b, -1px -1px 8px #1e1e26'; /*DARK*/
                                                // Handle :active state using mousedown and mouseup events
                                                button.addEventListener('mousedown', () => {
                                                    button.style.boxShadow = '6px 6px 27px #11111b, -6px -6px 27px #1e1e26'; /*DARK*/
                                                });
                                                button.addEventListener('mouseup', () => {
                                                    button.style.boxShadow = '1px 1px 8px #11111b, -1px -1px 8px #1e1e26'; /*DARK*/
                                                });
                                            });
                                        }
                                    };

                                    // Function to toggle the theme
                                    const toggleTheme = () => {
                                        const currentTheme = document.documentElement.getAttribute('data-bs-theme');
                                        const cardElement = document.getElementById('profile');
                                        const buttonElements = document.querySelectorAll('.neo-button');

                                        console.log("Clicked!");
                                        if (currentTheme === 'light') {
                                            document.documentElement.setAttribute('data-bs-theme', 'dark');
                                            console.log("Switched to dark theme!");
                                            document.getElementById('navbarIcon').src = "{{ asset('imgs/logoLight.png') }}";
                                            console.log('Current theme is dark');
                                            cardElement.style.backgroundColor = '#30363d'; /*card body*/
                                            cardElement.style.boxShadow = '9px 9px 18px #11111b, -5px -5px 18px #1e1e26'; /*card shadow*/

                                            buttonElements.forEach(button => {
                                                button.style.boxShadow = '4px 4px 16px #181818, -2px -2px 16px #b3b3b3';
                                                // Handle :active state using mousedown and mouseup events
                                                button.addEventListener('mousedown', () => {
                                                    button.style.boxShadow = '6px 6px 27px #181818, -6px -6px 27px #b3b3b3'; /*button down*/
                                                });
                                                button.addEventListener('mouseup', () => {
                                                    button.style.boxShadow = '4px 4px 16px #181818, -2px -2px 16px #b3b3b3'; /*button up*/
                                                });
                                            });

                                            Cookies.set('profileBackgroundColor', '#30363d');   /*card body*/
                                            Cookies.set('profileBoxShadow', '9px 9px 18px #11111b, -5px -5px 18px #1e1e26'); /*card shadow*/

                                            buttonElements.forEach(button => {
                                                Cookies.set('buttonBoxShadow', '4px 4px 16px #181818, -2px -2px 16px #b3b3b3'); /*button up*/
                                                // Handle :active state using mousedown and mouseup events
                                                Cookies.set('buttonActiveBoxShadow', '6px 6px 27px #181818, -6px -6px 27px #b3b3b3'); /*button down*/
                                            });

                                            Cookies.set('theme', 'dark');
                                        } else {
                                            document.documentElement.setAttribute('data-bs-theme', 'light');
                                            console.log("Switched to light theme!");
                                            document.getElementById('navbarIcon').src = "{{ asset('imgs/logo.png') }}";
                                            console.log('Current theme is light');
                                            cardElement.style.backgroundColor = '#e4e5f1';
                                            cardElement.style.boxShadow = '9px 9px 18px #484b6a, -5px -5px 18px #fafafa';

                                            buttonElements.forEach(button => {
                                                button.style.boxShadow = '4px 4px 16px #484b6a, -2px -2px 16px #fafafa';
                                                // Handle :active state using mousedown and mouseup events
                                                button.addEventListener('mousedown', () => {
                                                    button.style.boxShadow = '6px 6px 27px #484b6a, -6px -6px 27px #fafafa';
                                                });
                                                button.addEventListener('mouseup', () => {
                                                    button.style.boxShadow = '4px 4px 16px #484b6a, -2px -2px 16px #fafafa';
                                                });
                                            });

                                            Cookies.set('profileBackgroundColor', '#e4e5f1');
                                            Cookies.set('profileBoxShadow', '9px 9px 18px #484b6a, -5px -5px 18px #fafafa');

                                            buttonElements.forEach(button => {
                                                Cookies.set('buttonBoxShadow', '4px 4px 16px #484b6a, -2px -2px 16px #fafafa');
                                                // Handle :active state using mousedown and mouseup events
                                                Cookies.set('buttonActiveBoxShadow', '6px 6px 27px #484b6a, -6px -6px 27px #fafafa');
                                            });

                                            Cookies.set('theme', 'light');
                                        }
                                    };

                                    // Event listener for theme switcher button
                                    const themeSwitcher = document.getElementById('btnSwitch');
                                    themeSwitcher.addEventListener('click', () => {
                                        toggleTheme();
                                        checkTheme(); // Call the checkTheme function when the theme is toggled
                                    });

                                    // Check if a theme cookie exists and set the theme accordingly
                                    const savedTheme = Cookies.get('theme');
                                    if (savedTheme) {
                                        document.documentElement.setAttribute('data-bs-theme', savedTheme);
                                        if (savedTheme === 'dark') {
                                            document.getElementById('navbarIcon').src = "{{ asset('imgs/logoLight.png') }}";
                                        } else {
                                            document.getElementById('navbarIcon').src = "{{ asset('imgs/logo.png') }}";
                                        }
                                        console.log("Loaded saved theme:", savedTheme);
                                        checkTheme(); // Call the checkTheme function when the page is loaded

                                        // Check if a profile background color cookie exists and set the color accordingly
                                        const savedProfileColor = Cookies.get('profileBackgroundColor');
                                        if (savedProfileColor) {
                                            const cardElement = document.getElementById('profile');
                                            cardElement.style.backgroundColor = savedProfileColor;
                                            console.log("Loaded saved profile background color:", savedProfileColor);
                                        }

                                        // Check if a profile box shadow cookie exists and set the box shadow accordingly
                                        const savedProfileBoxShadow = Cookies.get('profileBoxShadow');
                                        if (savedProfileBoxShadow) {
                                            const cardElement = document.getElementById('profile');
                                            cardElement.style.boxShadow = savedProfileBoxShadow;
                                            console.log("Loaded saved profile box shadow:", savedProfileBoxShadow);
                                        }

                                        // Check if a button box shadow cookie exists and set the box shadow accordingly
                                        const savedButtonBoxShadow = Cookies.get('buttonBoxShadow');
                                        if (savedButtonBoxShadow) {
                                            buttonElements.forEach(button => {
                                                button.style.boxShadow = savedButtonBoxShadow;
                                                // Handle :active state using mousedown and mouseup events
                                                button.addEventListener('mousedown', () => {
                                                    button.style.boxShadow = Cookies.get('buttonActiveBoxShadow');
                                                });
                                                button.addEventListener('mouseup', () => {
                                                    button.style.boxShadow = savedButtonBoxShadow;
                                                });
                                            });
                                            console.log("Loaded saved button box shadow:", savedButtonBoxShadow);
                                        }
                                    }
                                });
                            </script>
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

                                    <a class="dropdown-item" href="{{route('home')}}">
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
            <div class="container">
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>

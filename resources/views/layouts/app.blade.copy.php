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
    <script src="https://kit.fontawesome.com/1bf0086160.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
</head>

<body>
    <style>
        
    </style>
    <div id="app">
        @guest

        @else
        <div class="menu">
            <div class="navigation">
                <ul>
                    <li>
                        <a href="/home">
                            <span class="icon"><i class="fas fa-smile"></i></span>
                            <span class="title">{{ Auth::user()->name }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="/registroOrdenServicio/create">
                            <span class="icon"><i class="fas fa-clipboard-list"></i></span>
                            <span class="title">Orden Servicio</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#">
                            <span class="icon"><i class="fas fa-folder-open fa-lg"></i></span>
                            <span class="title">Informes</span>
                        </a>
                        <div class="dropdown-content">
                            <a href="/home">Servicios</a>
                            <a href="#">Reporte de Actividades</a>
                        </div>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fas fa-users fa-lg"></i></span>
                            <span class="title">Usuarios</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fas fa-car fa-l"></i></span>
                            <span class="title">Vehiculos</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <span class="icon"><i class="fas fa-walking"></i></span>
                            <span class="title">
                                {{ __('Cerrar Sesion') }}
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        @endguest
        @guest
        <main class="py-4">
            @yield('content')
        </main>
        @else
        <div class="content">
            <div class="topbar">
                <div class="toggle">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <main class="py-4">
                @yield('content')
            </main>
        </div>
        @endguest
    </div>




    <script>
        let toggle = document.querySelector('.toggle');
        let navigation = document.querySelector('.navigation');
        let content = document.querySelector('.content');

        toggle.onclick = function() {
            navigation.classList.toggle('active')
            content.classList.toggle('active')
        }




        let list = document.querySelectorAll('.navigation li');

        function activeLink() {
            list.forEach((item) =>
                item.classList.remove('hovered'));
            this.classList.add('hovered');
        }
        list.forEach((item) =>
            item.addEventListener('mouseover', activeLink));
    </script>
</body>

</html>
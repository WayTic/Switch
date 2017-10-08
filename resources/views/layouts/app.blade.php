<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title','Switch')</title>

    </head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-light justify-content-between fondo_oscuro encabezado">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('img/logo.png') }}" width="120" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                    @if (Auth::guest())
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('login') }}">INICIA SESIÓN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">SOPORTE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">NOTICIAS</a>
                        </li>
                    @else
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                    @endif
                </ul>
            </div>
        </nav>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 slogan fondo_rojo">
                <p>Estamos aquí para <span class="txt_blanco">crear valor</span> mucho más allá del próximo minuto.</p>
            </div>
        </div>
    </div>
    <main class="main">
        @yield('content')
    </main>
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 fondo_rojo pie_pagina">
                </div>
            </div>            
        </div>
    </footer>
    <!-- Styles -->

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/estilos.css') }}">

    <!-- Jquery -->
    <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</body>
</html>
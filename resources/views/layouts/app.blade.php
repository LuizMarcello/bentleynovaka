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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    {{-- <html lang="en"> --}}
</head>

<body>
    {{-- Este bloco, somente se o usuário estiver autenticado,
         com a sessão do lado do servidor estabelecida --}}
    {{-- @auth
        <li class="nav-item">
            <a class="nav-link" href="#">Aaaaaaa</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">Bbbbbbb</a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Ccccccc</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Ccccc0101</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Ccccc0202</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Ccccc0303</a>
            </div>
        </li>
    @endauth --}}

    <nav class="navbar navbar-expand-sm   navbar-light bg-light shadow-sm">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="white-space: nowrap;">
                <li class="nav-item">
                    <a class="nav-link" href="#">Para sua residência <span class="sr-only">(current)</span></a>
                </li>
                <div class="dropdown-divider"></div>
                <li class="nav-item">
                    <a class="nav-link" href="#">Para empresas <span class="sr-only">(current)</span></a>
                </li>
                <div class="dropdown-divider"></div>
                <li class="nav-item">
                    <a class="nav-link" href="#">Internet Pré Paga <span class="sr-only">(current)</span></a>
                </li>
                <div class="dropdown-divider"></div>
                <li class="nav-item">
                    <a class="nav-link" href="#">Acesse nosso site <span class="sr-only">(current)</span></a>
                </li>

                {{-- <li class="nav-item dropdown dmenu">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Dropdown link
                    </a>
                    <div class="dropdown-menu sm-menu">
                        <a class="dropdown-item" href="#">Link 1</a>
                        <a class="dropdown-item" href="#">Link 2</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                        <a class="dropdown-item" href="#">Link 4</a>
                        <a class="dropdown-item" href="#">Link 5</a>
                        <a class="dropdown-item" href="#">Link 6</a>
                    </div>
                </li> --}}

            </ul>
            <div class="dropdown-divider"></div>
            <div class="social-part" style="white-space: nowrap;">
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </div>
            <div class="dropdown-divider"></div>

        </div>
    </nav>
    </ul>

    <banner-component></banner-component>

    </div>
    </div>
    </nav>

    <banner-component></banner-component>

    <main class="py-4">
        @yield('content')
    </main>
    </div>
</body>

</html>

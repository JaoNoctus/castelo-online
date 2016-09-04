<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">

        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('apple-touch-icon-57x57.png') }}">
    	<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('apple-touch-icon-60x60.png') }}">
    	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('apple-touch-icon-72x72.png') }}">
    	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('apple-touch-icon-76x76.png') }}">
    	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('apple-touch-icon-114x114.png') }}">
    	<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('apple-touch-icon-120x120.png') }}">
    	<link rel="icon" type="image/png" href="{{ asset('favicon-32x32.png') }}" sizes="32x32">
    	<link rel="icon" type="image/png" href="{{ asset('favicon-96x96.png') }}" sizes="96x96">
    	<link rel="icon" type="image/png" href="{{ asset('favicon-16x16.png') }}" sizes="16x16">
    	<link rel="manifest" href="{{ asset('manifest.json') }}">
    	<link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg') }}" color="#005196">
    	<meta name="apple-mobile-web-app-title" content="Terceirão">
    	<meta name="application-name" content="Terceirão">
    	<meta name="msapplication-TileColor" content="#ff0000">
    	<meta name="theme-color" content="#005196">

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway';
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Cadastre-se</a>
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    {{ config('app.name') }}
                </div>

                <div class="links hidden-xs">
                    <a href="{{ route('atividades.index') }}">Atividades</a>
                    <a href="{{ route('provas.index') }}">Provas</a>
                    <a href="{{ route('horarios.index') }}">Horários</a>
                    <a href="{{ route('boletim.index') }}">Boletim</a>
                    <a href="{{ config('castelo.drive') }}" target="_blank">Caderno Virtual</a>
                </div>
            </div>
        </div>
        <div class="navbar-fixed-bottom text-center text-muted">
            <div class="container-fluid badge alert-warning">
                Developed by <a href="https://noctus.org" target="_blank" class="alert-link">Studio Noctus</a>
            </div>
        </div>
    </body>
</html>

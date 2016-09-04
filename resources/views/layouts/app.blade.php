<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <style>
    .navbar-avatar {border-radius: 999px; margin: -11px 10px -10px 0; padding: 0;}
    </style>

    <!-- Scripts -->
    <script src="https://use.fontawesome.com/fe105ef4ac.js"></script>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('atividades.index') }}"><i class="fa fa-files-o"></i> Atividades</a></li>
                    <li><a href="{{ route('provas.index') }}"><i class="fa fa-file-text-o"></i> Provas</a></li>
                    <li><a href="{{ route('horarios.index') }}"><i class="fa fa-calendar"></i> Horários</a></li>
                    <li><a href="{{ route('boletim.index') }}"><i class="fa fa-bar-chart-o"></i> Boletim</a></li>
                    <li><a href="{{ config('castelo.drive') }}" target="_blank"><i class="fa fa-folder-open-o"></i> Caderno Virtual</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Cadastre-se</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <img src="{{ Auth::user()->picture_url !== NULL ? Auth::user()->picture_url : config('castelo.default_profile_url')}}" height="32px" width="32px" class="navbar-avatar" />
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Sair
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
    @include('layouts._ads')

    <div class="navbar-fixed-bottom text-center text-muted">
        <div class="container-fluid badge alert-warning">
            Developed by <a href="https://noctus.org" target="_blank" class="alert-link">Studio Noctus</a>
        </div>
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    @yield('scripts')
</body>
</html>

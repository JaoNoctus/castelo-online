<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>

	<title>TERCEIRÃO</title>

	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700"/>
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons"/>

	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.8/css/bootstrap-material-design.min.css"/>
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.8/css/ripples.min.css"/>
	<link rel="stylesheet" type="text/css" href="//fezvrasta.github.io/snackbarjs/dist/snackbar.min.css"/>

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
	<link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg') }}" color="#009688">
	<meta name="apple-mobile-web-app-title" content="Terceirão">
	<meta name="application-name" content="Terceirão">
	<meta name="msapplication-TileColor" content="#ff0000">
	<meta name="theme-color" content="#009688">

	<style>
	body {
		padding-top: 70px !important;
	}
	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ route('atividades') }}">TERCEIRÃO</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="{{ route('atividades') }}">Atividades</a></li>
					<li><a href="https://drive.google.com/a/studionoctus.com/file/d/0B-cwefcz8AzjZjFYWW1Ndzgyb1E/view" target="_blank">Horários</a></li>
					<li><a href="https://drive.google.com/open?id=0B-cwefcz8AzjRzE0b2diTlZvaTQ" target="_blank">Caderno Virtual</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					@if (Auth::check())
						<li class="dropdown">
							<a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }} <b class="caret"></b></a>
							<ul class="dropdown-menu">
								@shield ('atividades.create')
								<li><a href="{{ route('atividades.create') }}">Adicionar atividade</a></li>
								@endshield
								<li class="divider"></li>
								<li><a href="{{ route('auth.logout.get') }}">Desconectar</a></li>
							</ul>
						</li>
					@else
						<li><a href="{{ route('auth.login.get') }}">Login</a></li>
					@endif
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="container">
		@yield('content')
	</div>

	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.8/js/ripples.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.8/js/material.min.js"></script>
	<script src="//fezvrasta.github.io/snackbarjs/dist/snackbar.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>

	<script> $(function () { $.material.init(); }); </script>
</body>
</html>

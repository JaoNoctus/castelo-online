@section ('ads')
	<center>
		<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6934296242213124" data-ad-slot="6255245692" data-ad-format="auto"></ins>
		<script> (adsbygoogle = window.adsbygoogle || []).push({}); </script>
	</center>
@endsection

<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>

	<title>3º A</title>

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
	<link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg') }}" color="#005196">
	<meta name="apple-mobile-web-app-title" content="Terceirão">
	<meta name="application-name" content="Terceirão">
	<meta name="msapplication-TileColor" content="#ff0000">
	<meta name="theme-color" content="#005196">

	<style>
        body {
            padding-top: 70px !important;
        }

        .navbar, .navbar.navbar-default,
        .panel.panel-primary>.panel-heading {
            background-color: #005196;
        }

        .navbar .dropdown-menu li>a:focus,
        .navbar .dropdown-menu li>a:hover,
        .navbar.navbar-default .dropdown-menu li>a:focus,
        .navbar.navbar-default .dropdown-menu li>a:hover,
        .btn:not(.btn-raised).btn-primary,
        .input-group-btn .btn:not(.btn-raised).btn-primary,
        a, a:hover {
            color: #005196;
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
				<a class="navbar-brand" href="{{ route('atividades.index') }}">3º A</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					@is ('professor')
						<li class="dropdown">
							<a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Atividades <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="{{ route('atividades.index') }}">Visualizar</a></li>
								<li><a href="{{ route('atividades.create') }}">Adicionar</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Provas <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="{{ route('provas.index') }}">Visualizar</a></li>
								<li><a href="{{ route('provas.create') }}">Adicionar</a></li>
							</ul>
						</li>
					@else
						<li><a href="{{ route('atividades.index') }}">Atividades</a></li>
						<li><a href="{{ route('provas.index') }}">Provas</a></a></li>
					@endis
					<li><a href="https://drive.google.com/a/studionoctus.com/file/d/0B-cwefcz8AzjZjFYWW1Ndzgyb1E/view" target="_blank">Horários</a></li>
					<li><a href="https://drive.google.com/open?id=0B-cwefcz8AzjRzE0b2diTlZvaTQ" target="_blank">Caderno Virtual</a></li>
					@is ('admin')
						<li class="dropdown">
							<a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Usuários <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Visualizar</a></li>
								<li><a href="#">Adicionar</a></li>
							</ul>
						</li>
					@endis
				</ul>
				<ul class="nav navbar-nav navbar-right">
					@if (Auth::check())
						<li class="dropdown">
							<a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }} <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="{{ route('auth.logout.get') }}">Desconectar</a></li>
							</ul>
						</li>
					@else
						<li><a href="{{ route('auth.login.get') }}">Login</a></li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('ads')
	<div class="container">
		@yield('content')
	</div>
	@yield('ads')

	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.8/js/ripples.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.8/js/material.min.js"></script>
	<script src="//fezvrasta.github.io/snackbarjs/dist/snackbar.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

	<script> $(function () { $.material.init(); }); </script>
	<script> (adsbygoogle = window.adsbygoogle || []).push({ google_ad_client: "ca-pub-6934296242213124", enable_page_level_ads: true }); </script>
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-75594098-1', 'auto');
	ga('send', 'pageview');
	</script>

</body>
</html>

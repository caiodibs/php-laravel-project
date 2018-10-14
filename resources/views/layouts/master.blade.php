<!DOCTYPE html>
<html lang="pt" >

<head>
	<meta charset="UTF-8">
	<title>CS Photos</title>
	<meta name="view-port" content="width:device-width">
	<meta name="description" content="CS Photos">
	<meta name="keywords" content="CS Photos, Serviços de fotografia, Fotos artísticas">
	<meta name="author" content="Caio Soares">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

  
</head>

<body>

<header>
	<nav class="navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand" href="#">
		<img
			src="{{ asset('img/logo.png') }}"
			height="50"
			alt="Logo CS Photos">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
	
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item" role="presentation"><a href="{{ route('index') }}" class="nav-link">Home</a></li>
			<li class="nav-item" role="presentation"><a href="{{ route('about') }}" class="nav-link">Sobre a empresa</a></li>
			<li class="nav-item" role="presentation"><a href="{{ route('team') }}" class="nav-link">Equipa</a></li>
			<li class="nav-item" role="presentation"><a href="{{ route('contact') }}" class="nav-link">Contato</a></li>
			@guest
				<li class="nav-item" role="presentation"><a href="{{ route('register') }}" class="nav-link">Registar</a></li>
				<li class="nav-item" role="presentation"><a href="{{ route('login') }}" class="nav-link">{{ __('Entrar') }}</a></li>
			@else
			<li class="nav-item" role="presentation"><a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
				document.getElementById('logout-form').submit();">{{ __('Sair') }}</a></li>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>
			@endguest
		</ul>
		</div>
	</nav>
</header>
<!-- Main area -->
<main role="main">
	<!-- Home section -->
    @yield("home")
    <!-- About section -->
    @yield("about")
	
    <!-- Team section -->
    @yield("team")
	
    <!-- Contact section -->
    @yield("contact")

	<!-- Register section -->
    @yield("register")

	<!-- Login section -->
    @yield("login")
</main>
<!-- Footer area -->
<footer class="container-fluid">
  	<div class="text-center">©2017-2018 CS Photos</div>
</footer>
  
<!--script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src='https://use.fontawesome.com/fb19627366.js'></script>
<script-- src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script-->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/index.js') }}" defer></script>

</body>

</html>

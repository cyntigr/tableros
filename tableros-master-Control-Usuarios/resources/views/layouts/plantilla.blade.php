<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>@lang('messages.lbtablero')</title>
	<meta charset="utf-8" />

	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Dimensiones del Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Font -->
    <!--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;500;700&display=swap" rel="stylesheet">

	<!-- Importamos recursos: scripts  -->
	

	<!-- Importamos recursos: hojas de estilo -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tableros.css') }}" />

    <!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

	<div class="container mt-4">

		<!-- navegación -->
		<div class="row">
			<div class="col text-right">
				@guest
				{{-- el usuario no está logueado, así que no mostramos el enlace para el logout --}}
				@else
				<a href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i> Salir</a> |
				@endguest
				<a href=""><i class="far fa-flag"></i> Español</a> |
				<a href=""><i class="far fa-flag"></i> Inglés</a>
			</div>
		</div>

		<!-- título -->
		@guest
		{{-- el usuario no está logueado, así que no mostramos el título --}}
		@else
		<div class="row">
			<div class="col">
				<h1>@yield('titulo')</h1>
			</div>
		</div>
		@endguest

		<!-- cuerpo -->
		<div class="row">
			<div class="col">
			@yield('cuerpo')
			</div>
		</div>	
		
	</div>

</body>
</html>
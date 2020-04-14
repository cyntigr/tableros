<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>@lang('messages.lbtablero')</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Font -->
    <!--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;500;700&display=swap" rel="stylesheet">

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
				<a href=""><i class="far fa-flag"></i> Español</a> |
				<a href=""><i class="far fa-flag"></i> Inglés</a>
			</div>
		</div>

		<!-- título -->
		<div class="row">
			<div class="col">
				<h1>@lang('messages.lbtablero') @yield('titulo')</h1>
			</div>
		</div>

		<!-- cuerpo -->
		<div class="row">
			<div class="col">
			@yield('cuerpo')
			</div>
		</div>	
		
	</div>

</body>
</html>
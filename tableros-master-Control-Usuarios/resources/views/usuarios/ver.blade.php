@extends('plantilla')
@section('titulo')
: Usuarios
@stop

@section('cuerpo')

	<div class="row">
		<div class="col">
			<ul>
				<li>{{ $usuario->idUsu }}</li>
				<li>{{ $usuario }}</li>
				<li>{{ $usuario->email }}</li>
				<li>{{ $usuario->perfil }}</li>
				<li>{{ $usuario->created_at }}</li>
			</ul>
		</div>
	</div>

@stop

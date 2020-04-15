@extends('plantilla')
@section('titulo')
: Usuarios
@stop

@section('cuerpo')

	<div class="row">
		<div class="col">
			<table class="table">
				<thead>
					<tr>
						<td>nombre</td>
						<td></td>
					</tr>
				</thead>

				<tbody>
					@foreach($usuarios as $item)
					<tr>
						<td>{{ $item }}</td>
						<td><a href="{{ route('usuario.ver',[$item]) }}">info</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

@stop

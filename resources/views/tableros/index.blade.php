@extends('plantilla')
@section('cuerpo')
	<table class="table">
		<thead>
			<tr>
				<th>nombre</th>
				<th>fecha</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
		</thead>

		<tbody>
			@foreach($tableros as $item)
			<tr>
				<td>{{ $item->nombre }}</td>
				<td>@df($item)</td>
				<td><a href="{{ route('nota.ver', 		['id' => $item->idTab]) }}">ver</a></td>
				<td><a href="{{ route('tablero.editar', ['id' => $item->idTab]) }}">editar</a></td>
				<td><a href="{{ route('tablero.borrar', ['id' => $item->idTab]) }}">borrar</a></td>
			</tr>
			@endforeach
		</tbody>

	</table>
@stop
@extends('plantilla')
@section('cuerpo')

	<div class="row mt-2">
		<div class="col">
			<a href="{{ route('tablero.aniadir') }}"><i class="far fa-plus-square"></i> añadir tablero</a>
		</div>
	</div>

	@if (session('message'))
	<div class="row mt-2">
		<div class="col">
			<div class="alert alert-danger" role="alert">
				{{ session('message') }}
			</div>
		</div>
	</div>
	@endif


	<div class="row mt-2">
		<div class="col">
			<table class="table">
				<thead>
					<tr>
						<th>@lang('messages.lbnombre')</th>
						<th>@lang('messages.lbfecha')</th>
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
						<td><a href="{{ route('nota.ver', 		['id' => $item->idTab]) }}"><i class="far fa-eye"></i> @lang('messages.lbver')</a></td>
						<td><a href="{{ route('tablero.editar', ['id' => $item->idTab]) }}"><i class="fas fa-edit"></i> @lang('messages.lbeditar')</a></td>
						<td><a href="{{ route('tablero.borrar', ['id' => $item->idTab]) }}"><i class="fas fa-trash-alt"></i> @lang('messages.lbborrar')</a></td>
					</tr>
					@endforeach
				</tbody>

			</table>
		</div>
	</div>
@stop
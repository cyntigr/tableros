@extends('plantilla')

@section('titulo')
: @lang('messages.lbnotas')
@stop

@section('cuerpo')

	<div class="row mt-2">
		<div class="col">
			<a href=""><i class="far fa-plus-square"></i> añadir nota</a> |
			<a href="{{ route('tablero.ver') }}"><i class="fas fa-arrow-circle-left"></i> volver</a>
		</div>
	</div>

	@if(!$notas)
	<div class="alert alert-primary" role="alert">
		@lang('messages.nonotas')
	</div>
	@else
	<div class="row mt-4">
		<div class="col">
			<table class="table">
				<thead>
					<tr>
						<th>fecha</th>
						<th>texto</th>
						<th></th>
						<th></th>
						<th></th>
					</tr>
				</thead>

				<tbody>
					@foreach($notas as $item)
					<tr>
						<td>@df($item)</td>
						<td>{{ $item->texto }}</td>
						<td class="text-center">
							@if($item->completado)
							<span class="badge badge-pill badge-success">
								<a class="text-white" href="{{ route('nota.estado', ['idn' => $item->idNot, 'idt' => $item->idTab]) }}">completado</a>
							</span>
							@else
							<span class="badge badge-pill badge-danger">
								<a class="text-white" href="{{ route('nota.estado', ['idn' => $item->idNot, 'idt' => $item->idTab]) }}">pendiente</a>
							</span>
							@endif
						</td>
						<td><a href="{{ route('nota.editar', ['idn' => $item->idNot, 'idt' => $item->idTab]) }}"><i class="fas fa-edit"></i> @lang('messages.lbeditar')</a></td>
						<td><a href="{{ route('nota.borrar', ['idn' => $item->idNot, 'idt' => $item->idTab]) }}"><i class="fas fa-trash-alt"></i> @lang('messages.lbborrar')</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	@endif

@stop

	
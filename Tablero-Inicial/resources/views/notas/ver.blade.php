@extends('plantilla')
@section('titulo')
: notas
@stop

@section('cuerpo')

	<div class="row mt-2">
		<div class="col">
			<a href="{{ route('nota.anadir',['idTab' => $idTab]) }}"><i class="far fa-plus-square"></i> añadir nota</a>
		</div>
	</div>
	<div class="row mt-2">
		<div class="col">
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Texto</th>
						<th>Fecha</th>
						<th>Completado</th>
						<th></th>
						<th></th>
						<th></th>
					</tr>
				</thead>

				<tbody>
					@foreach($notas as $item)
					<tr>
						<td>{{ $item->idNot }}</td>
						<td>{{ $item->texto }}</td>
						<td>@df($item)</td>
						<td style="text-align:center">
						@if($item->completado == 0) 
							No
						@else
							Si
						@endif
						</td>
						<td><a href="{{ route('nota.visualizar',['id' => $item->idNot]) }}">ver</a></td>
						<td><a href="{{ route('nota.edit',['id' => $item->idNot]) }}">editar</a></td>
						<td><a href="">borrar</a></td>
					</tr>
					@endforeach
				</tbody>

			</table>
		</div>
	</div>
@stop

	
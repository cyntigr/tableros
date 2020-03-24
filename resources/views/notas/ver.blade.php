@extends('plantilla')
@section('titulo')
: notas
@stop

@section('cuerpo')

	<h4>Hola k ase?</h4>
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
				<td style="text-align:center">@if($item->completado == 0) 
        			 No 
   				@else
        			 Si 
				  @endif</td>
				<td><a href="{{ route('nota.visualizar',['id' => $item->idNot]) }}">ver</a></td>
				<td><a href="">editar</a></td>
				<td><a href="">borrar</a></td>
			</tr>
			@endforeach
		</tbody>

	</table>
@stop

	
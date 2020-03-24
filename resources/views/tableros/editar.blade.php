@extends('plantilla')
@section('titulo')
: editar
@stop

@section('cuerpo')

	<!-- CRSF (Cross-site Request Fogery) -->
	<form action="{{ route('tablero.editar') }}" method="post">

		<input type="hidden" name="id" value="{{ $tablero->idTab }}" />		
		@csrf

		<div class="row">
			<div class="col-sm-4">
				<input class="form-control" type="text" name="nom" 
					   value="{{ $tablero->nombre }}"
					   required />
			</div>

			<div class="col">
				<button class="btn btn-primary" type="submit">Guardar</button>
			</div>
		</div>
	</form>

@stop


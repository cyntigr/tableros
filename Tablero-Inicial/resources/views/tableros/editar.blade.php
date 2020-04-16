@extends('plantilla')
@section('titulo')
: @lang('messages.lbeditar')
@stop

@section('cuerpo')

	
	<div class="row">
		<div class="col">

			@if($tablero)
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

					<div class="col-sm-2">
						<button class="btn btn-primary" type="submit">@lang('messages.btguardar')</button>
					</div>
				</div>
			</form>
			@else
			<div class="alert alert-info" role="alert">
		  		{{ __('messages.notableros') }}
			</div>
			@endif
		</div>
	</div>


	@if (!$errors->isEmpty())
	<div class="row mt-2">
		<div class="col-sm-4">
			<div class="alert alert-danger" role="alert">
		  		{{ $errors->first('nom') }}
			</div>
		</div>
	</div>
	@endif

@stop


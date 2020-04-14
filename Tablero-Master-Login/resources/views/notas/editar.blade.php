@extends('plantilla')
@section('titulo')
: @lang('messages.lbeditar')
@stop

@section('cuerpo')

	
	<div class="row">
		<div class="col">

			@if($nota)
			<!-- CRSF (Cross-site Request Fogery) -->
			<form action="{{ route('nota.editar') }}" method="post">

				<input type="hidden" name="idn" value="{{ $nota->idNot }}" />
				@csrf

				<div class="row">
					<div class="col">
						<textarea class="form-control" name="tex" required>{{ old('tex', $nota->texto) }}</textarea>
					</div>
				</div>
				<div class="mt-1">
					<div class="col p-0">
						<button class="btn btn-primary" type="submit">@lang('messages.btguardar')</button>
						<a class="btn btn-danger" href="{{ route('nota.ver', ['id' => $nota->idTab]) }}">@lang('messages.btcancelar')</a>
					</div>
				</div>
			</form>
			@else
			<div class="alert alert-info" role="alert">
		  		{{ __('messages.nonotas') }}
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


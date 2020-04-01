@extends('plantilla')
@section('titulo')
: @lang('messages.lbaniadir') Nota

@stop

@section('cuerpo')

		<form action="{{ route('nota.anadir') }}" method="post">
            @csrf
            @isset($nota)
            <input type="hidden" value="{{ $nota->idNot ?? '' }}" name="idNot" />
			@endisset
            <input type="hidden" value="{{ $idTab }}" name="id" />

            <div class="row" style="margin-top:10px;">
				<div class="col-sm-4">
					<textarea class="form-control" type="text" name="texto"
							autocomplete="off" 
							value="" >{{ $nota->texto ?? '' }}</textarea>
				</div>
            </div>

            <div class="row" style="margin-top:10px;">
				<div class="col-sm-4">
                    <input class="form-control" type="date" value="{{ $nota->fecha ?? '' }}" name="fecha" />
                </div>
            </div>

            <div class="row" style="margin-top:10px;">
				<div class="col-sm-4">
				<label>Estado: </label><br />
                <input type="radio" name="completado" value="0" <?= ($nota->completado ?? false)?"":"checked" ?> />No completado
                <input type="radio" name="completado" value="1" <?= ($nota->completado ?? '')?"checked":"" ?>/>Completado
            
            <br />
                    
                </div>
            </div>

            <div class="row" style="margin-top:10px;">
				<div class="col-sm-1">
					<button class="btn btn-primary" type="submit">@lang('messages.btguardar')</button>

				</div>

				<div class="col-sm-1">
					<a class="btn btn-danger text-white"
						href="{{ route('nota.ver',['idTab' => $idTab]) }}">@lang('messages.btcancelar')</a>
				</div>
            </div>
		</form>
@stop

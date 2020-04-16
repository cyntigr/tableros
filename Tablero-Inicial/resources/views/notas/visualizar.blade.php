@extends('plantilla')
@section('titulo')
: Ver nota
@stop
@section('cuerpo')
<h5>Texto</h5>
<p>{{ $nota->texto }}</p>
<h5>Fecha</h5>
<div>{{ $nota->fecha }} </div>
<h5>Completado</h5>

   @if($nota->completado == 0) 
        <div> No </div>
   @else
        <div> Si </div>
   @endif
   
<a href="{{ route('nota.ver',['id' => $nota->idTab]) }}">Atras</a>
@stop
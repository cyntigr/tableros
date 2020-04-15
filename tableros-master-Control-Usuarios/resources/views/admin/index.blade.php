@extends('layouts.plantilla')
@section('titulo') Administrador @stop
@section('cuerpo')

	Bienvenido/a, {{ Auth::user() }}

@stop
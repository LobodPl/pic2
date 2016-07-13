@extends('layouts.master')

@section('title', 'Galeria')

@section('sidebar')
 @for ($i = 1; $i <= $ilosc; $i++)
	<div class="col-xs-10 col-lg-4">
	<div class="col-xs-10 col-lg-5">
	<a href="{{$obr[$i]}}" class="thumbnail" data-lightbox="galeria1">
	<img src="{{$obr[$i]}}" height="100%" width="100%">
	</a>
	</div>
	<div class="col-xs-6 col-lg-3">
	<div class="caption">
    <h3>{{$name[$i]}}</h3>
    <p>Rozmiar: {{$wielkosc[$i]}}kb</p>
    </div></div></div>
 @endfor

@endsection

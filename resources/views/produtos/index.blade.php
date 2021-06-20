

@extends('layouts.template')
@section('title', 'Produtos')
@section('content')

<h1>Pagina dos produto com Recurso Blade</h1>

    <p> @foreach($produtos as $produto) </p>
    <p> {{$produto -> Nome}} </p>
    @endforeach
@endsection


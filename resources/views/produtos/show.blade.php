@extends('layouts.template')
@section('title', 'Mostrar produtos')
@section('content')


<!-- jumbotron v5 -->
<div class="bg-light p-5 rounded-lg m-3">
    <h1 class="display-4">   <?php echo $produto->Nome ?></h1>
    <p class="lead"><?php echo $produto->descricao ?></p>
    <hr class="my-4">
    <p>It uses utility classes for r container.</p>
    <a class="btn btn-primary btn-lg" href="{{route('produtos')}}" role="button"> Ver Produtos</a>
</div>

@endsection
@extends('layouts.template')
@section('title', 'Mostrar produtos')
@section('content')

<?php
$format_value = number_format($produto->valor, 2, ',', '.');
?>

<!-- jumbotron v5 -->
<div class="bg-light p-5 rounded-lg m-3">
    <h1 class="display-4"> <?php echo $produto->Nome ?> </h1>
    <p class="lead"><?php echo $produto->descricao ?> - Preço € <?php echo $format_value ?> </p>
    <hr class="my-4">
    <p>
        Lorem Ipsum is simply dummy text of the printing and
        typesetting industry. Lorem Ipsum has been the industry's
        standard dummy text ever since the 1500s,
        when an unknown printer took a galley of type and scrambled it to make
        Lorem Ipsum is simply dummy text of the printing and
        typesetting industry. Lorem Ipsum has been the industry's
        standard dummy text ever since the 1500s,
        when an unknown printer took a galley of type and scrambled it to make
    </p>
    <a class="btn btn-primary btn-lg" href="{{route('produtos')}}" role="button"> Ver Produtos</a>
</div>

@endsection
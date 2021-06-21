

@extends('layouts.template')
@section('title', 'Editar produtos')
@section('content')

<div class="container">

<h4>Pagina editar  produto com Recurso Blade</h4>

    <form method="POST" action="{{route('produtos.editar',$produto->ID)}}">  
    @csrf
    @method('put')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome Produto</label>
            <input type="text" class="form-control" id="frNomeProduto" name="nome" value="{{$produto->Nome}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Descrição</label>
            <input type="text" class="form-control" id="frDescricao" name="descricao" value="{{$produto->descricao}}">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Valor</label>
            <input type="text" class="form-control" id="frValor" name="valor" value="{{$produto->valor}}">
        </div>
        <button type="submit" class="btn btn-primary">Salvar  Produto</button>
    </form>
</div>

@endsection
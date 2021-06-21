@extends('layouts.template')
@section('title', 'criar produtos')
@section('content')


<div class="container">

<h4>Pagina criar produto com Recurso Blade</h4>

    <form method="POST" action="{{route('produtos.insert')}}">  
    @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome Produto</label>
            <input type="text" class="form-control" id="frNomeProduto" name="nome" >
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Descrição</label>
            <input type="text" class="form-control" id="frDescricao" name="descricao">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Valor</label>
            <input type="text" class="form-control" id="frValor" name="valor">
        </div>
        <button type="submit" class="btn btn-primary">Salvar  Produto</button>
    </form>
</div>

@endsection
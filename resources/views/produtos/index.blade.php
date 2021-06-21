@extends('layouts.template')
@section('title', 'Produtos')
@section('content')

<div class="container mt-2">

    <a href="{{route('produtos.create')}}" class="mt-4 mb-4 btn btn-primary" type="submit">Adicionar </a>
    <!-- DataTales Example -->
    <div class="card  mb-4">

        <div class="card-body">
            <div class="table-responsive">

                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Valor</th>
                            <th>Ver Produto</th>
                            <th>Editar</th>
                            <th>Remover</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produtos as $produto)
                        <tr>
                            <td>{{$produto -> ID}}</td>
                            <td>{{$produto -> Nome}}</td>
                            <td>{{$produto -> descricao}}</td>
                            <td>{{$produto -> valor}}</td>
                            <td>
                                <a title="Ver Informações do Produto" href="{{route('produtos.show', $produto ->ID)}}">
                                    <i class="fas fa-eye text-success" style="cursor:pointer;"></i>
                                </a>
                            </td>

                            <td>
                                <a title="Editar dados  do Produto" href="{{route('produtos.edit', $produto ->ID)}}">
                                    <i class="fas fa-edit text-warning" style="cursor:pointer;"></i>
                                </a>
                            </td>

                            <td>
                                <a title="Apagar Produto" href="#">
                                    <i class="fas fa-trash text-danger" style="cursor:pointer;"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    <tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
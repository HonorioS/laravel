
<?php

@session_start();
// 
// if (@$_SESSION['nome']==null) {
// 
    // return redirect()->route('home');
    // 
    // echo "<script language='javascript'> window.location='./'</script>";
// }


?>

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
                                <a data-bs-toggle="modal" data-bs-target="#exampleModal" title="Apagar Produto">
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

<!--  modal delete produto  -->

<div class="modal" tabindex="-1" id="exampleModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Deletar Produto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4 class="text-dark text-center">Deseja Apagar o Seguinte Produto ? </h4>
            </div>
            <div class="modal-footer justify-content-center">
                <form action="{{route('produtos.delet', $produto ->ID)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-secondary bg-danger">Excluir</button>
                </form>
                <button type="button" class="btn btn-primary  bg-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.template')
@section('title', 'Produtos')
@section('content')

<div class="container mt-2">

    <a href="produtos/create" class="mt-4 mb-4 btn btn-primary" type="submit">Adicionar Produto</a>

    <!-- DataTales Example -->
    <div class="card  mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <!-- <table class="table" id="dataTable" width="100%" cellspacing="0"> -->
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Valor</th>
                            <th>Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($produtos as $produto)
                        <tr>
                            <td scope="row">{{$produto -> ID}}</td>
                            <td>{{$produto -> Nome}}</td>
                            <td>{{$produto -> descricao}}</td>
                            <td>{{$produto -> valor}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
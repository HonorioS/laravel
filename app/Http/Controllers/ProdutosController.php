<?php

namespace App\Http\Controllers;

use App\Models\produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{

    public function index()
    {
       // $produtos = produto::all(); // all: carrega todos dados da tabela
        $produtos = produto::paginate(); // all: carrega todos dados da tabela

        return view('produtos.index', ['produtos' => $produtos]);

    }

    public function create()
    {

        // return "pagina para criar  produtos";
        return view('produtos.create');
    }

    public function show($id){

        return view('produtos.show', ['id' => $id]);
    }

    // public function show($nome, $valor)
    // {

        // return view('produtos.show', ['nome' => $nome, 'valor' => $valor]);

    // }
}

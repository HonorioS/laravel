<?php

namespace App\Http\Controllers;

use App\Models\produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{

    public function index()
    {
        $produtos = produto::all();
        return view('produtos.index', ['produtos' => $produtos]);

    }

    public function create()
    {

        // return "pagina para criar  produtos";
        return view('produtos.create');
    }

    public function show($nome, $valor)
    {

        return view('produtos.show', ['nome' => $nome, 'valor' => $valor]);

        // if ($nome) {
        // return "o nome do produto é $nome, e o  seu valor é  $valor €";
        // } else {
        // return -1;
        // }
    }
}

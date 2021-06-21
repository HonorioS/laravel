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

        return view('produtos.create');
    }

    public function show($id)
    {

        $produto = produto::find($id);
        return view('produtos.show', ['produto' => $produto]);
    }

    public function insert(Request $request)
    {
        $produto = new produto();
        $produto->Nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->valor = $request->valor;
        $produto->save();
        return redirect()->route('produtos');
    }

    public function edit(produto $produto)
    {

        // return $produto;
        return view('produtos.edit', ['produto' => $produto]);
    }


    public function editar(Request $request)
    {

        $produto = new produto();
        $produto->Nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->valor = $request->valor;
        $produto->save();
        return redirect()->route('produtos');
    }


    // public function show($nome, $valor)
    // {

    // return view('produtos.show', ['nome' => $nome, 'valor' => $valor]);

    // }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{

    public function index()
    {


        return "pagina principal produtos";
    }

    public function create()
    {

        return "pagina para criar  produtos";
    }

    public function show($nome, $valor)
    {


        if ($nome) {
            return "o nome do produto é $nome, e o  seu valor é  $valor ";
        } else {
            return -1;
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    
    public function index(){


        return "pagina principal produtos";
    }

    public function create(){
    
        return "pagina para criar  produtos";

    }

    public function show(){
    
        return "pagina para exibir produtos";

    }
}

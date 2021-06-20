<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __invoke()
    {
        return "voce entrou na raiza da aplicação HOME";
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Utilizador;
use Illuminate\Http\Request;

class UtilizadorController extends Controller
{
    public function login(Request $request)
    {

        $email = $request->email;
        $senha = $request->senha;

        $utilizador = Utilizador::where('Email', '=', $email)->where('Senha', '=', $senha)->first();

        if ($utilizador->ID != null) {

            @session_start();
            @$_SESSION['email'] = $utilizador->Email;
            @$_SESSION['nome'] =  $utilizador->Nome;

            return redirect()->route('produtos');
        } else {

            return redirect()->route('home');
        }
    }

    public function logout()
    {

        @session_start();
        @session_destroy();
        return redirect()->route('home');

    }
}

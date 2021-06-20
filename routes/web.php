<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;



Route::get('/', HomeController::class );
Route::get('produtos', [ProdutosController::class, 'index'] )-> name('produtos'); 
// Route::get('produtos/{nome}/{valor}', [ProdutosController::class, 'show'] )-> name('produtos.show');
Route::get('produtos/{id}',[ProdutosController::class, 'show'] )-> name('produtos.show'); 

Route::get('produtos/create', [ProdutosController::class, 'create'])-> name('produtos.create');  //  nomear rotas 



// Route::get('/', function () {
    //  return view('welcome');
  // return "ola laravel";
// });

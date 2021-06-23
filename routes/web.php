<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;


Route::get('/', HomeController::class );

Route::get('produtos', [ProdutosController::class, 'index'] )-> name('produtos');

Route::get('produtos/create', [ProdutosController::class, 'create'])-> name('produtos.create');  //  nomear rotas 

Route::get('produtos/{id}',[ProdutosController::class, 'show'] )-> name('produtos.show');

Route::post('produtos',[ProdutosController::class, 'insert'] )-> name('produtos.insert'); 

Route::get('produtos/{produto}/edit',[ProdutosController::class, 'edit'] )-> name('produtos.edit');

// Route::put('produtos/{produto}',[ProdutosController::class, 'update'] )-> name('produtos.update');
Route::put('produtos/update',[ProdutosController::class, 'update'] )-> name('produtos.update');




// Route::get('/', function () {
    //  return view('welcome');
  // return "ola laravel";
// });

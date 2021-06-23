<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UtilizadorController;

Route::get('/', HomeController::class )->name('home');;

Route::get('produtos', [ProdutosController::class, 'index'] )-> name('produtos');

Route::get('produtos/create', [ProdutosController::class, 'create'])-> name('produtos.create');  //  nomear rotas 

Route::get('produtos/{id}',[ProdutosController::class, 'show'] )-> name('produtos.show');

Route::post('produtos',[ProdutosController::class, 'insert'] )-> name('produtos.insert'); 

Route::get('produtos/{produto}/edit',[ProdutosController::class, 'edit'] )-> name('produtos.edit');

Route::put('produtos/update',[ProdutosController::class, 'update'] )-> name('produtos.update');

Route::delete('produtos/{produto}/delet',[ProdutosController::class, 'delet'] )-> name('produtos.delet');

Route::post('utilizador/login',[UtilizadorController::class, 'login'] )-> name('user.login');
Route::get('utilizador/logout',[UtilizadorController::class, 'logout'] )-> name('user.logout');




// Route::get('/', function () {
    //  return view('welcome');
  // return "ola laravel";
// });

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;



Route::get('/', HomeController::class );
Route::get('produtos', [ProdutosController::class, 'index'] );
Route::get('produtos/{nome}/{valor}', [ProdutosController::class, 'show'] );
Route::get('produtos/create', [ProdutosController::class, 'create'] );





// Route::get('/', function () {
    //  return view('welcome');
  // return "ola laravel";
// });

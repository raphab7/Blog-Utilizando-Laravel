<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ---------------------------------------------- Rotas Produto ------------------------------------------//

Route::get('/', function () {

    return view('welcome');
  
    });
// pagina inicial//
Route::get('/produto', [ProdutoController::class, 'index']) 
->name('produto.index');

//CREATE//
//Criação do formulário//
Route::get('/produto/create', [ProdutoController::class, 'create'])
->name('produto.create');

//Salvar o formulário//
Route::post('/produto/create', [ProdutoController::class, 'store'])
->name('produto/store');

Route::get('/produto/{id}', [ProdutoController::class ,'show'])
->name('produto.show');

//EDIT//
// Exibição do formulário com os dados do recurso //
Route::get('/produto/{id}/edit', [ProdutoController::class, 'edit'])
->name('produto.edit');

//Atualiza os dados do recurso passados pelo Formulário //
Route::put('/produto/{id}', [ProdutoController::class, 'update'])
->name('produto.update');

//DELETE//
Route::delete('/produto/{id}', [ProdutoController::class, 'destroy'])
->name('produto.destroy');

// ---------------------------------------------- Rota Produto ------------------------------------------//

// ---------------------------------------------- Rota Categoria ----------------------------------------//

// pagina inicial//
Route::get('/categoria', [CategoriaController::class, 'index']) 
->name('categoria.index');

//CREATE//
//Criação do formulário//
Route::get('/categoria/create', [CategoriaController::class, 'create'])
->name('categoria.create');

//Salvar o formulário//
Route::post('/categoria/create', [CategoriaController::class, 'store'])
->name('categoria/store');

Route::get('/categoria/{id}', [CategoriaController::class ,'show'])
->name('categoria.show');

//EDIT//
// Exibição do formulário com os dados do recurso //
Route::get('/categoria/{id}/edit', [CategoriaController::class, 'edit'])
->name('categoria.edit');

//Atualiza os dados do recurso passados pelo Formulário //
Route::put('/categoria/{id}', [CategoriaController::class, 'update'])
->name('categoria.update');

//DELETE//
Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy'])
->name('categoria.destroy');

// ---------------------------------------------- Rota Categoria ----------------------------------------//

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

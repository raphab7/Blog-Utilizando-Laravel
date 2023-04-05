<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostagemController;
use App\Http\Controllers\ComentarioController;


Route::get('/', [PostagemController::class, 'index'])
->name('/postagem');

Route::get('postagem/{id}/edit', [PostagemController::class, 'edit'])
->name('postagem.edit');

Route::put('postagem/{id}', [PostagemController::class, 'update'])
->name('postagem.update');
 
Route::get('postagem/create', [PostagemController::class, 'create'])
->name('postagem.create');

Route::post('postagem/create', [PostagemController::class, 'store'])
->name('postagem.store');

Route::delete('postagem/{id}', [PostagemController::class, 'destroy'])
->name('postagem.destroy');

Route::get('postagem/{id}', [PostagemController::class, 'show'])
->name('postagem.show'); 




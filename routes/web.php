<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index']);

use App\Http\Controllers\SobreController;
Route::get('/sobre', [SobreController::class, 'index']);

use App\Http\Controllers\ContatoController;
Route::get('/contato', [ContatoController::class, 'index']);

use App\Http\Controllers\CriarController;
Route::controller(CriarController::class)->group(function() {
    Route::get('/criar/rotina', 'rotina');
    Route::get('/criar/ciclo', 'ciclo');
});

use App\Http\Controllers\SistemaController;
Route::controller(SistemaController::class)->group(function() {
    Route::get('/sistema/rotina/{id}', 'rotina');
    Route::get('/sistema/ciclo/{id}', 'ciclo');
});
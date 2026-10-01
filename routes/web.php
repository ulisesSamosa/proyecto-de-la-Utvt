<?php

use App\Http\Controllers\MasFrecuentesController;
use App\Http\Controllers\ReglamentoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('reglamento.index');
});

Route::get('/reglamento', [ReglamentoController::class, 'index'])
    ->name('reglamento.index');

Route::get('/mas-frecuentes', [MasFrecuentesController::class, 'index'])
    ->name('mas-frecuentes.index');

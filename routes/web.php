<?php

use App\Http\Controllers\Awesome\AwesomeController;
use App\Http\Controllers\ConversorController;
use Illuminate\Support\Facades\Route;

Route::get('index',[ConversorController::class, 'index'])->name('index');

Route::get('moedas/{moedas}', [AwesomeController::class, 'retornaMoedas'])->name('retornaMoedas');
Route::get('fechamento-ultimos-dias/{moeda}/{numero_dias}', [AwesomeController::class, 'retornaFechamentoDias'])->name('retornaFechamentoDias');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

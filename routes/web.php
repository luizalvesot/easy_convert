<?php

use App\Http\Controllers\Awesome\AwesomeController;
use Illuminate\Support\Facades\Route;

Route::get('retorna-moedas/{moedas}', [AwesomeController::class, 'retornaMoedas'])->name('retornaMoedas');

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

<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

//se crrea la ruta para los clientes
Route::resource('clientes', 'App\Http\Controllers\ClienteController');
Route::resource('clientes/show', 'App\Http\Controllers\ClienteController');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

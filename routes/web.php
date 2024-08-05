<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('productos', ProductoController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('nosotros', function () {
    return view('nosotros');
});

Route::get('/producto', [ProductoController::class, 'userIndex'])->name('productos');

Route::get('recetas', function () {
    return view('recetas');
});

Route::get('contacto', function () {
    return view('contacto');
});

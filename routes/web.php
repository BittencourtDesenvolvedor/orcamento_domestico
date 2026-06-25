<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [LoginController::class, 'index'])->name('index.form');
Route::post('/login', [LoginController::class, 'login'])->name('index.start');

Route::get('/inicio', [InicioController::class, 'index'])->name('inicio');

<?php

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

Route::get('/', function () {
    return view('welcome');
});

//Rutas oauth
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

//Rutas para los juegos
Route::get('/completa_palabra', function () {
    return view('games.completeWord');
});

//Rutas para el usuario
Route::get('/profile', function () {
    return view('users.perfil');
});

//Ruta del home
Route::get('/home', function () {
    return view('home');
});
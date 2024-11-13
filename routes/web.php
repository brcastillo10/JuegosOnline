<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivitiesController;
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

//Rutas de juegos
//Route::get('/completa_palabra', [ActivitiesController::class, 'index'])->name('games.completeWord');
Route::get('/completar-palabra', [ActivitiesController::class, 'index'])->name('games.completeWord');
Route::post('/verificar/{activity}', [ActivitiesController::class, 'verificar'])->name('activities.verificar');


//Route::post('/completa_palabra/verificar/{activities}', [ActivitiesController::class, 'verificar'])->name('actividades.verificar');



Route::get('/completa_trazos', function () { return view('games.completarTrazos');});

Route::get('/ordenaPalabra', function () { return view('games.ordenaPalara');});


//Rutas para el usuario
Route::get('/profile', function () {
    return view('users.perfil');
});

Route::get('/settings', function () {
    return view('error.404');
});

Route::get('/help', function () {
    return view('error.404');
});

Route::get('/results', function () {
    return view('users.results');
});

Route::get('/games', function () {
    return view('error.404');
});





//Ruta del home
Route::get('/home', function () {
    return view('home');
});
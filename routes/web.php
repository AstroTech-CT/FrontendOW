<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

Route::get('/registro', [PersonaController::class, 'MostrarFormularioRegistro'])->name('registro');
Route::post('/registrar-usuario', [PersonaController::class, 'registrarUsuario'])->name('registrar-usuario');
Route::get('/login', [PersonaController::class, 'MostrarFormularioLogin'])->name('login');
Route::get('/index', [PersonaController::class, 'MostrarIndexPrincipal'])->name('index');


Route::get('/index-privada', [PersonaController::class, 'MostrarIndexPrivada'])->name('index-privada');

// Ruta para la página principal (protegida por autenticación)
Route::get('/index-registrado', 'HomeController@index')->middleware('auth:api');


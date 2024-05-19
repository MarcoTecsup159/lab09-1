<?php

use App\Http\Controllers\SiteController;

Route::get('/eventos', [SiteController::class, 'eventos'])->name('eventos.eventos');
Route::get('/eventos/formulario', [SiteController::class, 'formulario'])->name('eventos.formulario');

// Nueva ruta creada par el envio de informacion
Route::post('/formulario', [SiteController::class, 'handleContact'])->name('formulario.submit');
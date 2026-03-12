<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfertaController;

Route::get('/', function () {
    return redirect('/ofertas');
});

// Esta línea activa todas las rutas necesarias para tu pizarra
Route::resource('ofertas', OfertaController::class);
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

require __DIR__.'/grupo_routes.php';
require __DIR__.'/docente_routes.php';
require __DIR__.'/docente_grupos_routes.php';

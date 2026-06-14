<?php

use Illuminate\Support\Facades\Route;

// Parte 1 — Rotas e Views Simples
Route::get('/', function () {
    return view('home');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/institucional/missao', function () {
    return view('institucional.missao');
});

Route::get('/institucional/valores', function () {
    return view('institucional.valores');
});

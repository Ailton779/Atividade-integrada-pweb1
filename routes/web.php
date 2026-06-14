<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\CursoController;

// Parte 1 — Rotas e Views Simples
Route::get('/', function () { return view('home'); });
Route::get('/sobre', function () { return view('sobre'); });
Route::get('/contato', function () { return view('contato'); });
Route::get('/institucional/missao', function () { return view('institucional.missao'); });
Route::get('/institucional/valores', function () { return view('institucional.valores'); });

// Parte 2 — Controllers
Route::get('/empresa', [PaginaController::class, 'empresa']);
Route::get('/servicos', [PaginaController::class, 'servicos']);
Route::get('/portfolio', [PaginaController::class, 'portfolio']);
Route::get('/blog', [PaginaController::class, 'blog']);
Route::get('/equipe', [PaginaController::class, 'equipe']); // fix: método equipe adicionado após erro proposital
Route::get('/cursos', [CursoController::class, 'index']);
Route::get('/cursos/novo', [CursoController::class, 'create']);
Route::get('/cursos/listagem', [CursoController::class, 'listagem']);

// Parte 3 — Parâmetros
Route::get('/usuario/{nome}', function ($nome) { return 'Usuário: ' . $nome; });
Route::get('/curso/{id}', [CursoController::class, 'show']);

// Parte 4 — Formulários
Route::get('/produtos/create', [App\Http\Controllers\ProdutoController::class, 'create']);
Route::post('/produtos', [App\Http\Controllers\ProdutoController::class, 'store']);
Route::get('/disciplinas', [App\Http\Controllers\DisciplinaController::class, 'index']);
Route::get('/disciplinas/novo', [App\Http\Controllers\DisciplinaController::class, 'create']);
Route::post('/disciplinas', [App\Http\Controllers\DisciplinaController::class, 'store']);
Route::get('/disciplinas/{id}', [App\Http\Controllers\DisciplinaController::class, 'show']);

// Parte 5 — Resource Controller
Route::resource('alunos', App\Http\Controllers\AlunoController::class);

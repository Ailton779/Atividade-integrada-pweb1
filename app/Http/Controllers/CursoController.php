<?php

namespace App\Http\Controllers;

class CursoController extends Controller
{
    public function index()
    {
        return 'Lista de Cursos';
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function listagem()
    {
        $cursos = ['Análise e Desenvolvimento de Sistemas', 'Redes de Computadores', 'Informática para Internet'];
        return view('cursos.listagem', compact('cursos'));
    }

    // Parte 3 — o parâmetro $id chega via URL, ex: /curso/5
    // O Laravel extrai o valor entre chaves da rota e injeta como argumento do método
    public function show($id)
    {
        return 'Curso selecionado: ID ' . $id;
    }
}

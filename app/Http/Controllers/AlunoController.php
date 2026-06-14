<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = ['Ana Silva', 'Bruno Costa', 'Carlos Mendes'];
        return view('alunos.index', compact('alunos'));
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(Request $request)
    {
        return 'Aluno cadastrado: ' . $request->input('nome');
    }

    public function show($id)
    {
        return view('alunos.show', compact('id'));
    }

    public function edit($id) {}
    public function update(Request $request, $id) {}
    public function destroy($id) {}
}

<?php

namespace App\Http\Controllers;

class PaginaController extends Controller
{
    public function empresa()
    {
        return 'Página da Empresa';
    }

    public function servicos()
    {
        return view('servicos');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function blog()
    {
        return view('blog');
    }

    // fix(controller): método equipe adicionado após erro proposital
    public function equipe()
    {
        return view('equipe');
    }
}

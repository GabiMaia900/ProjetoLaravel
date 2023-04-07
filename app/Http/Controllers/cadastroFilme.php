<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Filmes;

class cadastroFilme extends Controller
{
    //construimos o CRUD aqui

    public function buscarCadastroFilme(){
        return View('cadastroFilme');
    }

    public function cadastrarFilme(Request $request){
        $dadosFilme = $request->validate([
            'nomefilme' => 'string|required',
            'atores-filme' => 'string|required',
            'datalancamentofilme' => 'string|required',
            'sinopsefilme' => 'string|required',
            'capafilme' => 'string|required',
        ]);

        Filmes::create($dadosFilme);

        return Redirect::route('cadastro-filme');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Filmes;

class filmeController extends Controller
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
            'capafilme' => 'file|required',
        ]);
            //dd($dadosFilme);


            $file = $dadosFilme['capafilme'];
            $path = $file->store('capa','public');
            $dadosFilme['capafilme'] = $path; 
        
            Filmes::create($dadosFilme);

        //return Redirect::route('cadastro-filme');
    }

}

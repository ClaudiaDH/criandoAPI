<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profissional;

class ProfissionalController extends Controller
{
    //
    public function listarProfissionais(Request $request){
        //lista de objetos.
        $listaProfissionais = Profissional::all();
        //retornar uma resposta.
        return response()->json($listaProfissionais);
    }
    public function criarProfissional(Request $request){
        $newProfissional = new Profissional();
        $newProfissional->nome = $request->nome;
        $newProfissional->github = $request->github;
        $result = $newProfissional->save();

        //exibe as info que criou dentro do servidor
        return response()->json($newProfissional);

    }
}

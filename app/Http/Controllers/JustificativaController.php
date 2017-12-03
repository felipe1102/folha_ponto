<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Folha_ponto;
use App\Cad_evento;
use App\User;
use Auth;
class JustificativaController extends Controller
{
    public function justificativa($id){
    	$f = Folha_ponto::find($id);
    	
    	return view('funcionario.justificativa')->with('ponto', $f);
    }

    public function listaJustificativas(){
        $usuario = User::with('justificativa')->get()->where('id_cod_sup', Auth::guard()->user()->id)->toArray();

        return view('supervisor.listaFuncionariosJustificativas')->with('usuarios', $usuario);
    }

    public function cadastroJustificativa(Request $request){
    	$ev = new Cad_evento();
    	$ev->id_folha = $request['id_ponto'];
    	$ev->id_usuario = $request['id_usuario'];
    	$ev->descricao = $request['textarea'];
    	$ev->save();

    	return redirect('/home');
    	
    }

    public function aprovarJustificativa(Request $request){
        $folha = Folha_ponto::find($request["id_folha"]);
        $folha->hora_ent = '08:00:00';
        $folha->hora_saida = '18:00:00';
        $folha->save();

        $justi = Cad_evento::find($request["id_justificativa"]);
        $justi->delete();

        return redirect('/listaJustificativaFuncionarios');
        
    }
}

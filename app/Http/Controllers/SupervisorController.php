<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Cad_evento;
use App\Folha_Ponto;
class SupervisorController extends Controller
{
    public function listaFuncionarios(){
    	
    	$funcionarios = User::where('id_cod_sup', Auth::guard()->user()->id)->get()->toArray();
    	
    	return view('supervisor.listaFuncionarios')->with('funcionarios', $funcionarios);
    }

    public function justificativaFuncionario($id){
    	$justificativa = Cad_evento::find($id);
    	$ponto = Folha_Ponto::find($justificativa['id_folha']);
    	
    	return view('supervisor.justificativa_func')->with(['justificativa'=> $justificativa, 'ponto' => $ponto]);
    }
}

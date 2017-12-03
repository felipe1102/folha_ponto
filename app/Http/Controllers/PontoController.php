<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Folha_ponto;
use App\User;

class PontoController extends Controller
{
    public function indexPonto(){
    	return view('ponto')->with('resposta','');
    }

    public function cadastroPonto(Request $request){
    	//$request['id']

    	date_default_timezone_set('America/Sao_Paulo');
		$date = date('Y-m-d');
		$hora = date('H:i:s');

		
		//verifica se ja tem cadastro pro dia 
		$verificaFolha = Folha_ponto::where('id_user', $request['id'])->where('dia', $date)->get()->count();
		$usuario = User::find($request['id']);


		//verifica se o dia ja foi fechado ou seja o hora_saida ja foi preenchido
		$verificaDia = Folha_ponto::where('id_user', $request['id'])->where('dia', $date)->where('hora_saida', '!=', '')->get()->count();
		

		if($usuario == null){
			return view('ponto')->with('resposta','Usuario não cadastrado');
		}else{
			if ($verificaDia == "1") {
				return view('ponto')->with('resposta','Usuario Ja teve o dia fechado');
			}else{
				
				switch ($verificaFolha) {
					case '0':
						$fl = new Folha_ponto();
						$fl->id_user = $request['id'];
						$fl->dia = $date;
						$fl->hora_ent = $hora;
						$fl->hora_saida = "";
						$fl->save();
						return view('ponto')->with('resposta','Ponto batido Bom Trabalho '.$usuario['name']);
						break;
					case '1':
						$updfl = Folha_ponto::where('id_user', $request['id'])->where('dia', $date)->first();			
						$updfl->hora_saida = $hora;
						$updfl->save();
						return view('ponto')->with('resposta','Ponto batido Bom Descanso '.$usuario['name']);
						break;
					
					default:
						
						break;
				}
			}
		}
		
    }


    //fecha o ponto diario
    public function fecharPontoDia(){
    	$user = User::all()->ToArray();
    	$date = date('Y-m-d');
    	$ret = [];
    	
    	foreach ($user as $u) {
    		$folha = Folha_ponto::where('id_user', $u['id'])->where('dia', $date)->get();
    		if (!count($folha)) {
    			$ret[] = ['id_user' => $u['id'], 'data' => $date];
    		}
    	}
    	
    	
    	$final = $this->savePontoFaltas($ret);

    	return redirect('/listaFuncionariosRh');
    }

    public function savePontoFaltas($array){
    	foreach ($array as $d) {
    		$dados = new Folha_ponto();
    		$dados->id_user = $d['id_user'];
    		$dados->dia = $d['data'];
			$dados->hora_ent = "";
			$dados->hora_saida = "";
			$dados->save();
    	}
    }





    




    
}

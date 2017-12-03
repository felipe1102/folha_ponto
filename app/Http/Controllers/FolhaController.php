<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Folha_ponto;
class FolhaController extends Controller
{
    public function listaFuncionariosFolha(){
    	$usuarios = User::all()->ToArray();
    	return view('RH.listaFuncionarioFolha')->with('usuarios', $usuarios)->with('erros', '');
    }

    public function folha($id){
    	$usuarios = User::all()->ToArray();
    	$usuario = User::with('ponto')->get()->find($id);
    	$f = new Folha_ponto();

    	$horas = $f->horasTrabalhadasNoMes($usuario['ponto']);
		

		if ($horas == 'Horas n cadastradas') {
			return view('RH.listaFuncionarioFolha')->with('usuarios', $usuarios)->with('erros', 'Usuario com problema no ponto');
		}else{
	    	$valorHora = round($usuario['salario'] / 220, 2);

	    	if ($horas >= 220) {
	    		
	    		$valorHoraExtra = $f->calcHoraExtra($valorHora);

	    		$valorTotalDeHoraExtra = ($horas - 220) * $valorHoraExtra;
	    		
	    		$salarioMaisHoraExtra = $valorTotalDeHoraExtra + $usuario['salario'];

	    		return view('RH.folha')->with(['usuario' => $usuario, 'horaExtra' => $valorTotalDeHoraExtra, 'numeroHorasExtras' => $valorHoraExtra, 'desconto' => '', 'liquido'=>$salarioMaisHoraExtra]);
	    	}else{
	    		$desconto = $usuario['salario'] - $valorHora * $horas;
	    		$salario = $valorHora * $horas;
	    		//dd($salario, $desconto);
	    		return view('RH.folha')->with(['usuario' => $usuario, 'horaExtra' => '', 'numeroHorasExtras' => 0, 'desconto' => $desconto,'liquido'=>$salario ]);
	    	}
	    }
    	
    }

    
}

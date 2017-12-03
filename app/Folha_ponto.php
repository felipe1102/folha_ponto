<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folha_ponto extends Model
{
   protected $fillable = [
        'id_user', 
        'dia', 
        'hora_ent',
        'hora_saida',
    ];


    public function horasTrabalhadasNoMes($folhaPonto){
    	$horasmes = 0;
    	
    	//dd($folhaPonto);
    	foreach ($folhaPonto as $v) {
    		if ($v['hora_ent'] == "" || $v['hora_saida'] == "") {
    			return 'Horas n cadastradas'; 
    		}else{
    			$horasmes = $horasmes + $this->calcTempo($v['hora_ent'], $v['hora_saida']);
    		}
    		
    	}

    	return $horasmes;    			
    }

    public function calcTempo($inicio, $fim){
    	//Calcula o tempo de upload

		$entrada = $inicio;
		$saida = $fim;
		$hora1 = explode(":",$entrada);
		$hora2 = explode(":",$saida);
		$acumulador1 = ($hora1[0] * 3600) + ($hora1[1] * 60) + $hora1[2];
		$acumulador2 = ($hora2[0] * 3600) + ($hora2[1] * 60) + $hora2[2];
		$resultado = $acumulador2 - $acumulador1;
		$hora_ponto = floor($resultado / 3600);
		$resultado = $resultado - ($hora_ponto * 3600);
		$min_ponto = floor($resultado / 60);
		$resultado = $resultado - ($min_ponto * 60);
		$secs_ponto = $resultado;
		//Grava na variável resultado final
		//dd($hora_ponto, $min_ponto);
		//$tempo = $hora_ponto.":".$min_ponto.":".$secs_ponto;
		return $hora_ponto - 1;
    }

    public function calcHoraExtra($valoHora){
    	$valorHoraExtra = (($valoHora * 50) / 100) +  $valoHora;
    	return $valorHoraExtra;
    }


}

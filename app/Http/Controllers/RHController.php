<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
class RHController extends Controller
{
    public function listaFuncionariosRh(){
    	
    	$pontos = DB::select('SELECT * FROM folha_pontos WHERE MONTH(dia)='.date('m'));
    	
    	foreach ($pontos as $value) {
    		$user[] = User::where('id', $value->id_user)->first();
    	}

    	$us = new User();
    	$usuarios = $us->addUsuario($user, $pontos);
    	
    	return view('RH.listaFuncionariosRh')->with('user',$usuarios);
    }
}

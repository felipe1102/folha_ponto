<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UsuarioController extends Controller
{
    public function telaCadastroUsuario(){
        $super = User::where('nivel', 2)->get();
    	return view('RH.cadastroFuncionario')->with('super', $super);
    }

    public function cadastrarFuncionario(Request $request){
    	//dd($request->all());
    	$u = new User();
    	$u->name = $request['name'];
    	$u->email = $request['email'];
    	$u->password = bcrypt($request['senha']);
    	$u->id_cod_sup =  ($request['supervisor'] == null) ? "" : $request['supervisor'];
    	$u->salario = $request['salario'];
    	$u->UF = $request['uf'];
    	$u->Cidade = $request['cidade'];
    	$u->nivel =  $request['tipoUsuario'];
    	$u->save();
    	return redirect("/listaFuncionariosRh");
    }

    
}

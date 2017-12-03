<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Folha_ponto;
class LoginUsuarioController extends Controller
{
    public function telaLogin(){
        
        return view('login');
    }

    public function loginUsuario(Request $request){
    	//dd($request->all());
        $validator = validator($request->all(), [
            'email' => 'required|min:3|max:100',
            'password' => 'required|min:3|max:100',
        ]);

        if ($validator->fails()) {
            return redirect('/login')->withErrors($validator)->withInput();
        }

        $credentials = ['email'=> $request['email'], 'password'=> $request['password']];
        
        $login = auth()->guard()->attempt($credentials);
        
        return redirect('/home');



    }

    public function logoutUsuario(){
		
		auth()->guard()->logout();
		return redirect('/'); 
	}
}

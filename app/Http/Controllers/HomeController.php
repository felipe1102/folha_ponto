<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Folha_ponto;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $folha = Folha_ponto::where('id_user', Auth::guard()->user()->id)->get();
        $folha = DB::select('SELECT * FROM folha_pontos WHERE MONTH(dia)='.date('m').' AND id_user='.Auth::guard()->user()->id);
        //dd($folha);
        return view('home')->with('folha', $folha);
    }
}

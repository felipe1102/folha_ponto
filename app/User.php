<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'id_cod_sup',
        'salario',
        'UF',
        'Cidade',
        'nivel',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function addUsuario($usuario, $ponto){
        foreach ($usuario as $keyu =>$u) {
            foreach ($ponto as $keyp => $p) {
                if($u->id == $p->id_user){
                    $p->name = $u->name;
                }
            }
            # code...
        }
        return $ponto;
    }


    public function ponto(){
        return $this->hasMany('App\Folha_ponto', 'id_user')->where('hora_ent', '!=', '');
    }
     public function justificativa()
    {
        return $this->hasMany('App\Cad_evento', 'id_usuario');
    }


    
}

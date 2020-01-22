<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//Se for usar a classe tem que colocar o use abaixo.
use App\Profissional;
class Tecnologia extends Model
{
    //Definir que o nome da tabela desse modelo é essa:
    protected $table = "tecnologias";
    public function profissionais(){
        //poderia ser: return $this->belongsToMany('Profissional::class');
        return $this->belongsToMany('App\Profissional', 'profissionais_has_tecnologias', 'tecnologias_id', 'profissionais_id');
    }
}

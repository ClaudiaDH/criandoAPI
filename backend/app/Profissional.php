<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    //
    protected $table = "profissionais";
    public function tecnologias(){
        //poderia ser: return $this->belongsToMany('Profissional::class');
        return $this->hasMany('App\Tecnologia', 'profissionais_has_tecnologias', 'profissionais_id', 'tecnologias_id');
    }
}

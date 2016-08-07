<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $fillable = [
        'nome', 'descricao'
    ];

    public function reservas(){

        return $this->hasMany('App\reservas');
    }

    public function getReservaListAttribute()
    {

        return $this->reservas->lists('id')->all();
    }
}

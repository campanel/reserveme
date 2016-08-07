<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable = [
        'nome', 'descricao', 'user_id', 'sala_id', 'data_inicio', 'data_fim'
    ];

    /**
     * Get the users associated with the given reservas.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function user(){
        return $this->belongsToMany('App\User');
    }

    public function sala(){
        return $this->belongsToMany('App\Sala');
    }
}

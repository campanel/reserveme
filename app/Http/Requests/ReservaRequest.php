<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Reserva;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ReservaRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }

    public function toArray()
    {
        $array = parent::toArray();
        $array['user_id'] = Auth::user()->id;
        if($array['hora'] < 10){
            $array['hora'] = '0'.$array['hora'];
        }
        $array['data_inicio'] = $array['date']." ".$array['hora'].":00:00";
        return $array;
    }

    public function checkSala()
    {
        $reserva = $this->toArray();
        //dd($reserva);
        $wheres = ['data_inicio' => $reserva['data_inicio'], 'sala_id' => $reserva['sala_id'] ];
        $existeReserva = Reserva::where($wheres)->get();

        if($existeReserva->count() > 0){

            return false;
        }
        return true;
    }

    public function checkUser()
    {
        $reserva = $this->toArray();
        //dd($reserva);
        $wheres = ['data_inicio' => $reserva['data_inicio'], 'user_id' => $reserva['user_id'] ];
        $existeReserva = Reserva::where($wheres)->get();

        if($existeReserva->count() > 0){

            return false;
        }
        return true;

    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservaRequest;
use App\Reserva;
use App\Sala;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ReservaController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except'=> ['index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $reservas = Reserva::all();
        //return $reservas;
        $user = 'cleber.campanel';

        $add = $reservas->map(function ($reserva) {
            $sala = Sala::find($reserva['sala_id']);
            $user = User::find($reserva['user_id']);
            //dd($user);

            $reserva['sala_nome'] =$sala->nome;
            $reserva['user_nome'] =$user->username;
            return $reserva;
        });
        //dd($reservas);



        return view('reservas.index', compact('reservas', 'user'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $listSalas = Sala::lists('nome','id')->all();

        for($i=0 ;$i < 24;$i++){
            $fim = $i + 1;
            $horas[$i] = $i.':00 - '.$fim.':00';
        }

        return view('reservas.create', compact('listSalas','horas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ReservaRequest $request)
    {
        if(!$request->checkSala()){
            flash('A Sala já esta reservada neste horário.', 'danger');
            return Redirect::back()->withInput($request->toArray());
        }

        if(!$request->checkUser()){
            flash('Você já tem compromisso neste horário.', 'danger');
            return Redirect::back()->withInput($request->toArray());
        }

        Reserva::create($request->toArray());

        flash('Reserva criada com Sucesso!');

        return redirect('reservas')->with('flash_message');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Reserva $reserva)
    {
        return view('reservas.show', compact('reserva'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Reserva $reserva)
    {

        $listSalas = Sala::lists('nome','id')->all();

        for($i=0 ;$i < 24;$i++){
            $fim = $i + 1;
            $horas[$i] = $i.':00 - '.$fim.':00';
        }

        return view('reservas.edit', compact('reserva','listSalas','horas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update( Reserva $reserva, ReservaRequest $request)
    {
        if(!$request->checkSala()){
            flash('A Sala já esta reservada neste horário.', 'danger');
            return Redirect::back()->withInput($request->toArray());
        }

        if(!$request->checkUser()){
            flash('Você já tem compromisso neste horário.', 'danger');
            return Redirect::back()->withInput($request->toArray());
        }

        $reserva->update($request->toArray());

        flash('Reserva Atualizada com Sucesso!');
        return redirect('reservas')->with('flash_message');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Reserva $reserva)
    {
        $loginUserId = Auth::user()->id;
        $reservaUserId = $reserva->user_id;

        if($loginUserId != $reservaUserId){
            flash('A reserva só pode ser deletada pelo dono.', 'danger');
            return Redirect::back();
        }

        $reserva->delete();
        flash('Reserva Deletada com Sucesso!');
        return redirect('reservas')->with('flash_message');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservaRequest;
use App\Reserva;
use App\Sala;
use Illuminate\Http\Request;

use App\Http\Requests;

class ReservaController extends Controller
{
    /*public function __construct(){
        $this->middleware('auth');
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
        return view('reservas.index', compact('reservas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $salas = Sala::lists('nome','id');

        return view('reservas.create', compact('salas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ReservaRequest $request)
    {
        Reserva::create($request->all());

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
        return view('reservas.edit', compact('reserva'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update( Reserva $reserva, ReservaRequest $request)
    {
        $reserva->update($request->all());

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
        $reserva->delete();
        flash('Reserva Deletada com Sucesso!');
        return redirect('reservas')->with('flash_message');
    }
}

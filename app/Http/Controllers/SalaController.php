<?php

namespace App\Http\Controllers;

use App\Http\Requests\SalaRequest;
use App\Sala;
use Illuminate\Http\Request;

use App\Http\Requests;

class SalaController extends Controller
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
        $salas = Sala::all();
        //return $salas;
        return view('salas.index', compact('salas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('salas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(SalaRequest $request)
    {
        Sala::create($request->all());

        flash('Sala criada com Sucesso!');

        return redirect('salas')->with('flash_message');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Sala $sala)
    {
        return view('salas.show', compact('sala'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Sala $sala)
    {
        return view('salas.edit', compact('sala'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update( Sala $sala, SalaRequest $request)
    {
        $sala->update($request->all());

        flash('Sala Atualizada com Sucesso!');
        return redirect('salas')->with('flash_message');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Sala $sala)
    {
        $sala->delete();
        flash('Sala Deletada com Sucesso!');
        return redirect('salas')->with('flash_message');
    }
}

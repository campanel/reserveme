<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::all();
        //return $users;

        return view('users.index', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(UserRequest $request)
    {
        $input = $request->all();
        //dd($input);

        User::create([
            'username' => $input['username'],
            'email' => $input['email'],
            'password' => bcrypt($input['password']),
        ]);

        //User::create($request->all());

        flash('Usuário criado com Sucesso!');

        return redirect('users')->with('flash_message');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update( User $user, UserRequest $request)
    {
        $input = $request->all();
        //$user->update($request->all());

        $user->update([
            'username' => $input['username'],
            'email' => $input['email'],
            'password' => bcrypt($input['password']),
        ]);

        flash('Usuário Atualizado com Sucesso!');
        return redirect('users')->with('flash_message');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
        flash('Usuário Deletado com Sucesso!');
        return redirect('users')->with('flash_message');
    }


}

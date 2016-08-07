@extends('app')

@section('content')

    @include('errors.list')

    <h1>Editar Usuário: {!! $user->username  !!}</h1>

    {!! Form::model($user, ['method' => 'PATCH', 'enctype' => 'multipart/form-data', 'action' => ['UserController@update', $user->id]]) !!}

        @include('users.form',['submitButtonText' => 'Atualizar Usuário'])

    {!! Form::close() !!}

@stop
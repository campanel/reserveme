@extends('app')

@section('content')

    @include('errors.list')

    <h1>Criar Usuário</h1>

    <hr/>

    {!! Form::open(['url' => 'users','enctype' => 'multipart/form-data']) !!}

    @include('users.form',['submitButtonText' => 'Criar Usuário' ])

    {!! Form::close() !!}


@stop
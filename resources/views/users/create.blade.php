@extends('app')

@section('content')

    @include('errors.list')

    {!! Form::open(['url' => 'users','enctype' => 'multipart/form-data']) !!}

    @include('users.form',['submitButtonText' => 'Criar Usuário' ])

    {!! Form::close() !!}


@stop
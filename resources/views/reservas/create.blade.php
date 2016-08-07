@extends('app')

@section('content')

    @include('errors.list')

    <h1>Criar Reserva</h1>

    <hr/>

    {!! Form::open(['url' => 'reservas','enctype' => 'multipart/form-data']) !!}

    @include('reservas.form',['submitButtonText' => 'Criar Reserva','salas' => null  ])

    {!! Form::close() !!}


@stop
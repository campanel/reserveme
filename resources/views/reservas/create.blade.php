@extends('app')

@section('content')

    @include('errors.list')



    {!! Form::open(['url' => 'reservas','enctype' => 'multipart/form-data']) !!}

    @include('reservas.form',['submitButtonText' => 'Criar Reserva','salas' => null  ])

    {!! Form::close() !!}


@stop
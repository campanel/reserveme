@extends('app')

@section('content')

    @include('errors.list')

    <h1>Editar Reserva: {!! $reserva->nome  !!}</h1>

    {!! Form::model($reserva, ['method' => 'PATCH', 'enctype' => 'multipart/form-data',
        'action' => ['ReservaController@update', $reserva->id]]) !!}

        @include('reservas.form',['submitButtonText' => 'Atualizar Reserva'])

    {!! Form::close() !!}

@stop
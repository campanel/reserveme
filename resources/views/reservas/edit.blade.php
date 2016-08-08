@extends('app')

@section('content')

    @include('errors.list')


    {!! Form::model($reserva, ['method' => 'PATCH', 'enctype' => 'multipart/form-data',
        'action' => ['ReservaController@update', $reserva->id]]) !!}

        @include('reservas.form',['submitButtonText' => 'Atualizar Reserva'])

    {!! Form::close() !!}

@stop
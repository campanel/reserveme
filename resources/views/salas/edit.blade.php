@extends('app')

@section('content')

    @include('errors.list')

    {!! Form::model($sala, ['method' => 'PATCH', 'enctype' => 'multipart/form-data',
    'action' => ['SalaController@update', $sala->id]]) !!}

        @include('salas.form',['submitButtonText' => 'Atualizar Sala'])

    {!! Form::close() !!}

@stop
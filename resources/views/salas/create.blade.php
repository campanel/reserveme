@extends('app')

@section('content')

    @include('errors.list')

    <h1>Criar Sala</h1>

    <hr/>

    {!! Form::open(['url' => 'salas','enctype' => 'multipart/form-data']) !!}

    @include('salas.form',['submitButtonText' => 'Criar Sala' ])

    {!! Form::close() !!}


@stop
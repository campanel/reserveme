@extends('app')

@section('content')

    @include('errors.list')

    {!! Form::open(['url' => 'salas','enctype' => 'multipart/form-data']) !!}

    @include('salas.form',['submitButtonText' => 'Criar Sala' ])

    {!! Form::close() !!}


@stop
@extends('app')

@section('content')

    <h1>{{ $reserva->nome }}</h1>

    <hr/>

    <table class="table">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th colspan="2" >Ações</th>
        </tr>
        </thead>
        <tr>
            <td>{{ $reserva->nome }}</td>
            <td>{{ $reserva->descricao }}</td>
            <td>
                {{ link_to_route('reservas.edit', 'Editar', array($reserva->id), array('class' => 'btn btn-warning')) }}
            </td>
            <td>
                {{ Form::open(array('method' => 'DELETE', 'route' => array('reservas.destroy', $reserva->id))) }}
                {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
            </td>

        </tr>
    </table>


@stop
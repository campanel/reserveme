@extends('app')

@section('content')

    <h1>{{ $sala->nome }}</h1>

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
            <td>{{ $sala->nome }}</td>
            <td>{{ $sala->descricao }}</td>
            <td>
                {{ link_to_route('salas.edit', 'Editar', array($sala->id), array('class' => 'btn btn-warning')) }}
            </td>
            <td>
                {{ Form::open(array('method' => 'DELETE', 'route' => array('salas.destroy', $sala->id))) }}
                {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
            </td>

        </tr>
    </table>


@stop
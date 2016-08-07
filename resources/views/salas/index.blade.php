@extends('app')

@section('content')
    <h1>Salas</h1>

    <a href="{{ URL::route('salas.create') }}" class="btn btn-primary"> Nova Sala </a>
    <hr/>

    @if ($salas->count())
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th colspan="3" >Ações</th>
            </tr>
            </thead>

            <tbody>
            @foreach ($salas as $sala)
                <tr>
                    <td>{{ $sala->nome }}</td>
                    <td>{{ $sala->descricao }}</td>
                    <td>
                        {{ link_to_route('salas.show', 'Detalhes', array($sala->id), array('class' => 'btn btn-info')) }}
                    </td>
                    <td>
                        {{ link_to_route('salas.edit', 'Editar', array($sala->id), array('class' => 'btn btn-warning')) }}
                    </td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('salas.destroy', $sala->id))) }}
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach

            </tbody>

        </table>
    @else
        Sem dados para exibir.
    @endif

@stop
@extends('app')

@section('content')

    <div class="mdl-card__supporting-text">
        <a href="{{ URL::route('salas.create') }}" id="new" class=" mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">Nova Sala</a>
    </div>

    <div class="mdl-card__supporting-text">
    @if ($salas->count())
            <table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp table table-striped">
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
                        {{ link_to_route('salas.show', 'Detalhes', array($sala->id), array('class' => 'btn btn-info ')) }}
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
    </div>
@stop
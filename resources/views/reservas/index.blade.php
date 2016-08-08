@extends('app')

@section('content')

    <div class="mdl-card__supporting-text">
        <a href="{{ URL::route('reservas.create') }}" id="new" class=" mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">Nova Reserva</a>
    </div>

    <div class="mdl-card__supporting-text">
        @if ($reservas->count())
            <table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp table table-striped">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Sala</th>
                    <th>Usuário</th>
                    <th>Início</th>
                    <th colspan="3" >Ações</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($reservas as $reserva)
                    <tr>
                        <td>{{ $reserva->nome }}</td>
                        <td>{{ $reserva->descricao }}</td>
                        <td>{{ $reserva->sala_nome }}</td>
                        <td>{{ $reserva->user_nome }}</td>
                        <td>{{ $reserva->data_inicio }}</td>
                        <td>
                            {{ link_to_route('reservas.show', 'Detalhes',
                                array($reserva->id),
                                array('class' => 'btn btn-info'))
                            }}
                        </td>
                        <td>
                            {{ link_to_route('reservas.edit', 'Editar',
                                array($reserva->id), array('class' => 'btn btn-warning')) }}
                        </td>
                        <td>
                            {{ Form::open(array('method' => 'DELETE',
                                'route' => array('reservas.destroy', $reserva->id))) }}
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
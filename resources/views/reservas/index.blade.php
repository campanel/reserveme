@extends('app')

@section('content')
    <h1>Reserva de Salas</h1>

    <a href="{{ URL::route('reservas.create') }}" class="btn btn-primary"> Nova Reserva </a>
    <hr/>

    @if ($reservas->count())
        <table class="table table-striped table-bordered">
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

@stop
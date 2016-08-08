@extends('app')

@section('content')

    <div class="mdl-card__supporting-text">
        <a href="{{ URL::route('users.create') }}" id="new" class=" mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">Novo Usuário</a>
    </div>

    <div class="mdl-card__supporting-text">
    @if ($users->count())
            <table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp table table-striped">
            <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th colspan="3" >Ações</th>
            </tr>
            </thead>

            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        {{ link_to_route('users.show', 'Detalhes', array($user->id), array('class' => 'btn btn-info')) }}
                    </td>
                    <td>
                        {{ link_to_route('users.edit', 'Editar', array($user->id), array('class' => 'btn btn-warning')) }}
                    </td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('users.destroy', $user->id))) }}
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
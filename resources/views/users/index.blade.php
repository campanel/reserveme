@extends('app')

@section('content')
    <h1>Usuários</h1>

    <a href="{{ URL::route('users.create') }}" class="btn btn-primary"> Novo Usuário </a>
    <hr/>

    @if ($users->count())
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th colspan="3" >Action</th>
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

@stop
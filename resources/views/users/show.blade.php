@extends('app')

@section('content')

    <h1>{{ $user->username }}</h1>

    <hr/>

    <table class="table">
        <thead>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th colspan="2" >Action</th>
        </tr>
        </thead>
        <tr>
            <td>{{ $user->username }}</td>
            <td>{{ $user->email }}</td>
            <td>
                {{ link_to_route('users.edit', 'Editar', array($user->id), array('class' => 'btn btn-warning')) }}
            </td>
            <td>
                {{ Form::open(array('method' => 'DELETE', 'route' => array('users.destroy', $user->id))) }}
                {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
            </td>

        </tr>
    </table>


@stop
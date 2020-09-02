@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12 margin-tb">
            <div class="pull-left">
                <h2>Usuários Cadastrados</h2>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="row p-4 bg-white border rounded">

        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>CPF</th>
                <th>E-mail</th>
                <th>Ação</th>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name ?? null }}</td>
                <td>{{ $user->lastname ?? null }}</td>
                <td>{{ $user->doc ?? null }}</td>
                <td>{{ $user->email ?? null }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Detalhes</a>
                    <!-- <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Editar</a>    -->
                </td>
            </tr>
            @endforeach
        </table>

        {!! $users->links() !!}
    </div>
      
@endsection

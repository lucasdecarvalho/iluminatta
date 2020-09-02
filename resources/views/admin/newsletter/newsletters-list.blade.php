@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12 margin-tb">
            <div class="pull-left">
                <h2>Lista de Newsletter</h2>
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
            <th>E-mail</th>
            <th>Ação</th>
        </tr>
        @foreach ($newsletters as $news)
        <tr>
            <td>{{ $news->id }}</td>
            <td>{{ $news->name }}</td>
            <td>{{ $news->email }}</td>
            <td>
                <form method="POST" action="{{ route('newsletter.destroy',$news->id) }}" >
                    <!-- <a class="btn btn-primary" href="{{ route('newsletter.edit',$news->id) }}">Editar</a> -->
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $newsletters->links() !!}
</div>

      
@endsection
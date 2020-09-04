@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12 margin-tb">
            <div class="pull-left">
                <h2>Lista de Categorias</h2>
            </div>
            <div class="col-6 col-xl-12 mb-4 text-center text-xl-right">
                <a href="/admin/categories/create" class="btn btn-success">Adicionar Nova Categoria</a>
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
            <th>Título</th>
            <th>Caminho</th>
            <th>Tag</th>
            <th>Ação</th>
        </tr>
        @foreach ($categories as $catg)
        <tr>
            <td>{{ $catg->id }}</td>
            <td>{{ $catg->title }}</td>
            <td>{{ $catg->path }}</td>
            <td>{{ $catg->tag }}</td>
            <td>
                <form method="POST" action="{{ route('categories.destroy',$catg->id) }}" >
                    <a class="btn btn-primary" href="{{ route('categories.edit',$catg->id) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $categories->links() !!}
</div>

      
@endsection
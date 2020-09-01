@extends('layouts.admin')
@section('content')
    <div class="row mt-2">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Lista de Produtos</h2>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Status</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($products as $admin)
        <tr>
            <td>{{ $admin->id }}</td>
            <td>{{ $admin->name }}</td>
            <td>R$ <span class="money">{{ $admin->price }}</span></td>
            <td>@if($admin->status == true) Publicado @else Escondido @endif</td>
            <td>
                <form action="{{ route('admin.destroy',$admin->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('admin.show',$admin->id) }}">Detalhes</a>
                    <a class="btn btn-primary" href="{{ route('admin.edit',$admin->id) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $products->links() !!}
      
@endsection
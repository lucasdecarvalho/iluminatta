@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12 margin-tb">
            <div class="pull-left">
                <h2>Lista de Produtos</h2>
            </div>
            <div class="col-6 col-xl-12 mb-4 text-center text-xl-right">
                <a href="/admin/products/create" class="btn btn-success">Adicionar Novo Produto</a>
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
                <th>Preço</th>
                <th>Status</th>
                <th>Ação</th>
            </tr>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>R$ <span class="money">{{ $product->price }}</span></td>
                <td>@if($product->status == true) Publicado @else Escondido @endif</td>
                <td>
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                        <!-- <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Detalhes</a> -->
                        <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

    {!! $products->links() !!}
    </div>

      
@endsection
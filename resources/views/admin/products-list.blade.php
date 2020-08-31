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
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $admin)
        <tr>
            <td>{{ $admin->id }}</td>
            <td>{{ $admin->name }}</td>
            <td>R$ <span class="money">{{ $admin->price }}</span></td>
            <td>@if(!!$admin->status) Publicado @else Escondido @endif</td>
            <td>
                <form action="{{ route('admin.destroy',$admin->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('admin.show',$admin->id) }}">Detalhes</a>
    
                    <a class="btn btn-primary" href="{{ route('admin.edit',$admin->id) }}">Editar</a>
                    <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#DeleteModal">Deletar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <!-- <button type="submit" class="btn btn-danger">Deletar</button> -->
                </form>
            </td>
        </tr>
        <!-- Delete Modal-->
        <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Atenção!</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                </div>
                <div class="modal-body">Deseja realmente DELETAR esse produto?</div>
                <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>

                <form action="{{ route('admin.destroy',$admin->id) }}" method="POST">
        
                    @csrf
                    @method('DELETE')
        
                    <button class="btn btn-danger" type="submit" >Deletar</button>
                </form>
                </div>
            </div>
            </div>
        </div>
        @endforeach
    </table>

    {!! $products->links() !!}
      
@endsection
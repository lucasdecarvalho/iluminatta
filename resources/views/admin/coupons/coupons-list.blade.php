@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12 margin-tb">
            <div class="col-6 col-xl-12">
                <h2>Lista de Cupons de Desconto</h2>
            </div>
            <div class="col-6 col-xl-12 mb-4 text-center text-xl-right">
                <a href="/admin/coupons/create" class="btn btn-success">Adicionar Novo Cupom</a>
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
            <th>Code</th>
            <th>Desconto</th>
            <th>Ação</th>
        </tr>
        @foreach ($coupons as $cop)
        <tr>
            <td>{{ $cop->id }}</td>
            <td>{{ $cop->cod }}</td>
            <td>{{ $cop->discount }}</td>
            <td>
                <form method="POST" action="{{ route('coupons.destroy',$cop->id) }}" >
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $coupons->links() !!}
</div>

      
@endsection
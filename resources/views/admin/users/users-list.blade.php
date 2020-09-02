@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12 margin-tb">
            <div class="pull-left">
                <h2>Relatório de Vendas</h2>
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
                <th>Status</th>
                <th>Tid</th>
                <th>Entrega</th>
                <th>Cliente</th>
                <th>Ação</th>
            </tr>
            @foreach ($done as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>
                @if($item->success == true) Aprovada
                @else Reprovada @endif</td>
                <td>{{ $item->tid }}</td>
                <td>@if($item->status == 'waiting') Aguardando envio @elseif($item->status == 'delivered') Postado @elseif($item->status == 'done') Entregue @else Error edit.sales 34 @endif</td>
                <td>{{ $user->name }} {{ $user->lastname }} (cpf: {{ $user->doc }})</td>
                <td>
                    <a class="btn btn-info" href="{{ route('sales.show',$item->id) }}">Detalhes</a>
                    <a class="btn btn-primary" href="{{ route('sales.edit',$item->id) }}">Editar</a>   
                </td>
            </tr>
            @endforeach
        </table>

    </div>
      
@endsection

@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Produto</h2>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row p-4 bg-white border rounded">

        <form class="col-12" action="{{ route('sales.update',$sale->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="col-12">

                <div class="form-row">
                    <div class="form-group col-12 col-xl-6">
                        <label for="status">Alterar Status de Entrega:</label>
                        <select class="form-control" name="status" id="status" required>
                            <option value="{{ $sale->status }}">@if($sale->status == 'waiting') Aguardando envio @elseif($sale->status == 'delivered') Postado @elseif($sale->status == 'done') Entregue @else Error edit.sales 34 @endif</option>
                                <option value="waiting">Aguardando envio</option>
                                <option value="delivered">Postado</option>
                                <option value="done">Entregue</option>
                        </select>
                    </div>
                    <div class="form-group col-12 col-xl-6">
                        <label for="trackingNumber">Código de Entrega:</label>
                        <input type="text" name="trackingNumber" value="{{ $sale->trackingNumber }}" class="form-control" id="trackingNumber" maxlength="45" placeholder="Insira o código de rastreio dos Correios aqui">
                    </div>
                </div>
            
                <div class="form-row">
                    <div class="form-group col-12 text-right">
                        <button type="submit" class="btn btn-primary">Alterar</button>
                    </div>
                </div>
            
            </div>
    
        </form>
    </div>
@endsection
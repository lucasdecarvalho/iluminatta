@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12 margin-tb">
        <div class="pull-left">
            <h2>Adicionar Produto</h2>
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

    <form class="w-100" action="{{ route('coupons.store') }}" method="POST">
        @csrf
    
        <div class="row">
            <div class="col-12">
                
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="cod">Código do cupom:</label>
                        <input type="text" name="cod" class="form-control" maxlength="8" id="cod">
                    </div>
                    <div class="form-group col-6">
                        <label for="discount">Desconto (%):</label>
                        <input type="number" name="discount" class="form-control" id="discount" required>
                    </div>
                </div>
            
                <div class="form-row">
                    <div class="form-group col-12 text-right">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </div>
            
            </div>
        </div>
    
    </form>
</div>
@endsection
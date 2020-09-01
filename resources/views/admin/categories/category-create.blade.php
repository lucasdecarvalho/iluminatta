@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Adicionar Categoria</h2>
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
   
<form action="{{ route('categories.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-12">

            <div class="form-row">
                <div class="form-group col-12 col-xl-4">
                    <label for="title">Título:</label>
                    <input type="text" name="title" class="form-control" maxlength="45" id="title">
                </div>
                <div class="form-group col-12 col-xl-4">
                    <label for="path">Caminho:</label>
                    <input type="text" name="path" class="form-control" id="path" required>
                </div>
                <div class="form-group col-12 col-xl-4">
                    <label for="tag">Tag:</label>
                    <input type="text" name="tag" class="form-control" id="tag" required>
                </div>
            </div>
        
            <div class="form-row">
                <div class="form-group col-12 text-right">
                    <!-- <a class="btn btn-primary" href="{{ route('admin.index') }}"> Voltar</a> -->
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </div>
        
        </div>
    </div>
   
</form>
@endsection
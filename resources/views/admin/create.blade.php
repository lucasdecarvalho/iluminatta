@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Adicionar Produto</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary float-right mb-4" href="{{ route('admin.index') }}"> Voltar</a>
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
   
<form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row">
        <div class="col-12">
            
            <div class="form-row">
                <div class="form-group col-12 col-xl-4">
                    <label for="">Imagem 1:</label>
                    <input id="file-upload" type="file" name="fileUpload1" accept="image/*" onchange="readURL(this);">
                </div>
                <div class="form-group col-12 col-xl-4">
                    <label for="">Imagem 2:</label>
                    <input id="file-upload" type="file" name="fileUpload2" accept="image/*" onchange="readURL(this);">
                </div>
                <div class="form-group col-12 col-xl-4">
                    <label for="">Imagem 3:</label>
                    <input id="file-upload" type="file" name="fileUpload3" accept="image/*" onchange="readURL(this);">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-12 col-xl-6">
                    <label for="category">Categoria:</label>
                    <select class="form-control" name="category" id="category" required>
                        <option value="">Selecione...</option>
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                        <option value="4">04</option>
                        <option value="5">05</option>
                        <option value="6">06</option>
                        <option value="7">07</option>
                        <option value="8">08</option>
                        <option value="9">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                </div>
                <div class="form-group col-12 col-xl-6">
                    <label for="name">Nome:</label>
                    <input type="text" name="name" class="form-control" id="name" maxlength="45" required>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="caption">Descrição curta:</label>
                    <input type="text" name="caption" class="form-control" maxlength="255" id="caption">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-12 col-xl-6">
                    <label for="price">Preço (R$):</label>
                    <input type="text" name="price" class="form-control money" id="price" required>
                </div>
                <div class="form-group col-12 col-xl-6">
                    <label for="storage">Estoque:</label>
                    <input type="number" name="storage" class="form-control" id="storage" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-12 col-xl-6">
                    <label for="promo">Promoção:</label>
                    <select class="form-control" name="promo" id="promo">
                        <option value=""></option>
                    </select>
                </div>
                <div class="form-group col-12 col-xl-6">
                    <label for="status">Status:</label>
                    <select class="form-control" name="status" id="status" required>
                        <option value="">Selecione...</option>
                        <option value="true">Publicar</option>
                        <option value="false">Esconder</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-12">
                    <label for="details">Detalhes:</label>
                    <textarea class="form-control" style="height:150px" name="details" id="details"></textarea>
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
@endsection
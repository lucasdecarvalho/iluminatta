@extends('layouts.admin')
@section('content')

    <div class="col-12 border bg-light rounded-top">
        <div class="row">
            <div class="col-12 col-xl-6 p-2 p-xl-4">
                <h6 class="text-uppercase text-center text-xl-left font-weight-bold pt-2">Produtos</h6>
            </div>
        </div>
    </div>
   
    <div class="col-12 p-4 bg-white border border-top-0 rounded-bottom">
   
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

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
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

                    <div class="col-12 mt-4 mb-4 p-2 border-top"></div>

                    <div class="form-row">
                        <div class="form-group col-12 col-xl-6">
                            <label for="category">Categoria:</label>
                            <select class="form-control" name="category" id="category" required>
                                <option value="">Selecione...</option>
                                @foreach($category as $catg)
                                    <option value="{{ $catg->id }}">{{ $catg->title }}</option>
                                @endforeach
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
                                <option value="1">Publicar</option>
                                <option value="0">Esconder</option>
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
                            <a href="{{ route('products.index') }}" class="btn btn-secondary">Voltar</a>
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </div>
                    </div>
                
                </div>
            </div>
        
        </form>
    </div>
@endsection
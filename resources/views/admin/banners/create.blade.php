
@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12 margin-tb">
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

<div class="row p-4 bg-white border rounded">

    <form class="col-12" action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    
        <div class="row">
            <div class="col-12">

                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="file-upload">Banner (tamanho recomendado: 1674x750):</label><br>
                        <input id="file-upload" type="file" name="fileUpload1" accept="image/*" onchange="readURL(this);" required>
                    </div>
                    <div class="col-12 mt-2 mb-4 p-2 border-bottom"></div>
                </div>

                <div class="form-row">
                    <div class="form-group col-12 col-xl-6">
                        <label for="title">Título:</label>
                        <input type="text" name="title" class="form-control" maxlength="45" id="title">
                    </div>
                    <div class="form-group col-12 col-xl-6">
                        <label for="place">Localização:</label>
                        <select class="form-control" name="place" id="place" required>
                            <option value="">Selecione...</option>
                                <option value="1">Topo Home</option>
                                <option value="2">Meio Home</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-12 col-xl-6">
                        <label for="target">Link:</label>
                        <input type="text" name="target" class="form-control" id="target">
                    </div>
                    <div class="form-group col-12 col-xl-6">
                        <label for="status">Status:</label>
                        <select class="form-control" name="status" id="status" required>
                            <option value="">Selecione...</option>
                                <option value="1">Publicar</option>
                                <option value="2">Esconder</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="caption">Descrição (opcional):</label>
                        <input type="text" name="caption" class="form-control" maxlength="45" id="caption">
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
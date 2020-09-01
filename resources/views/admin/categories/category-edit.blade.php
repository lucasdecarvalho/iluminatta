@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Categoria</h2>
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
  
    <form action="{{ route('categories.update',$category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="col-12">
            
            <div class="form-row">
                <div class="form-group col-12 col-xl-6">
                    <label for="title">Título:</label>
                    <input type="text" name="title" value="{{ $category->title }}" class="form-control" id="title" maxlength="45" required>
                </div>
                <div class="form-group col-12 col-xl-6">
                    <label for="path">Caminho:</label>
                    <input type="text" name="path" value="{{ $category->path }}" class="form-control" maxlength="45" id="path" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-12 col-xl-12">
                    <label for="tag">Tag:</label>
                    <input type="text" name="tag" value="{{ $category->tag }}" class="form-control" id="tag">
                </div>
            </div>
        
            <div class="form-row">
                <div class="form-group col-12 text-right">
                    <button type="submit" class="btn btn-primary">Alterar</button>
                </div>
            </div>
        
        </div>
   
    </form>
@endsection
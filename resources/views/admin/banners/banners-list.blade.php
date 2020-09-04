@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12 margin-tb">
            <div class="pull-left">
                <h2>Lista de Banners</h2>
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
            <th>Título</th>
            <th>Banner</th>
            <th>Status</th>
            <th>Ação</th>
        </tr>
        @foreach ($banners as $bnr)
        <tr>
            <td>{{ $bnr->id }}</td>
            <td>{{ $bnr->title }}</td>
            <td class="text-center"><img style="width:auto;height:70px;" src="{{ asset($bnr->path ?? 'images/no-image.png') }}"></td>
            <td>@if(!!$bnr->status) Publicado @else Escondido @endif</td>
            <td>
                <form method="POST" action="{{ route('banners.destroy',$bnr->id) }}" >
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

</div>

      
@endsection
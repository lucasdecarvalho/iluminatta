@extends('layouts.app')
@section('content')

        <div class="container mb-4">
            <div class="card text-center">
                <div class="card-header">
                    Sucesso!
                </div>
                <div class="card-body">
                    <h5 class="card-title">Confirmação de pagamento</h5>
                    <p class="card-text">Seu pagamento foi realizado com sucesso!</p>
                </div>
                <div class="card-footer text-muted">
                    {{@date('d/m/Y')}}
                </div>
            </div>
        </div>

@endsection
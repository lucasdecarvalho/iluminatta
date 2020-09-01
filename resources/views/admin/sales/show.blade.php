@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12 margin-tb">
            <div class="pull-left">
                <h2>Detalhes do Produto</h2>
            </div>
        </div>
    </div>
   
    <div class="row p-4 bg-white border rounded">

        <div class="col-12">
            <div class="row">

    

                <div class="col-12 mt-4 mb-4 p-2 border">Dados da Venda:</div>



                <!-- <div class="col-12 col-xl-6 pt-2 pb-2">
                    <strong>Id:</strong>
                    {{ $sale->id }}
                </div> -->
                <div class="col-12 col-xl-6 pt-2 pb-2">
                    <strong>Merchant Order Id:</strong>
                    {{ $sale->merchantOrderId }}
                </div>
                <div class="col-12 col-xl-6 pt-2 pb-2">
                    <strong>Sucesso:</strong>
                    {{ $sale->success }}
                </div>
                <div class="col-12 col-xl-6 pt-2 pb-2">
                    <strong>Status:</strong>
                    {{ $sale->status }}
                </div>
                <div class="col-12 col-xl-6 pt-2 pb-2">
                    <strong>Tid:</strong>
                    {{ $sale->tid }}
                </div>
                <div class="col-12 col-xl-6 pt-2 pb-2">
                    <strong>Valor:</strong>
                    R$ <span class="money">{{ $sale->value }}</span>
                </div>
                <div class="col-12 col-xl-6 pt-2 pb-2">
                    <strong>Tipo de Pagamento:</strong>
                    {{ $sale->paymentType }}
                </div>
                <div class="col-12 col-xl-6 pt-2 pb-2">
                    <strong>Parcelamento:</strong>
                    {{ $sale->installments }}
                </div>
                <div class="col-12 col-xl-6 pt-2 pb-2">
                    <strong>Usuário:</strong>
                    {{ $sale->userId }}
                </div>
                <div class="col-12 col-xl-6 pt-2 pb-2">
                    <strong>Id do Pagamento:</strong>
                    {{ $sale->paymentId }}
                </div>
                <div class="col-12 col-xl-6 pt-2 pb-2">
                    <strong>Erro de Código:</strong>
                    {{ $sale->errorCod }}
                </div>



                <div class="col-12 mt-4 mb-4 p-2 border">Endereço:</div>



                <div class="col-12 col-xl-6 pt-2 pb-2">
                    <strong>Rua:</strong>
                    {{ $sale->street }}
                </div>
                <div class="col-12 col-xl-6 pt-2 pb-2">
                    <strong>N:</strong>
                    {{ $sale->number }}
                </div>
                <div class="col-12 col-xl-6 pt-2 pb-2">
                    <strong>Complemento:</strong>
                    {{ $sale->comp }}
                </div>
                <div class="col-12 col-xl-6 pt-2 pb-2">
                    <strong>Cidade:</strong>
                    {{ $sale->city }}
                </div>
                <div class="col-12 col-xl-6 pt-2 pb-2">
                    <strong>Estado:</strong>
                    {{ $sale->state }}
                </div>
                <div class="col-12 col-xl-6 pt-2 pb-2">
                    <strong>CEP:</strong>
                    {{ $sale->zipcode }}
                </div>



                <div class="col-12 mt-4 mb-4 p-2 border">Compra:</div>



                <div class="col-12 pt-2 pb-2">
                    <strong>Produtos:</strong>
                    @foreach ($done as $item)
                        @foreach ($item->cart as $prods)
                            <p class="w-100 p-0 m-0 mt-2">{{ $prods }}</p>
                        @endforeach
                    @endforeach
                </div>



                <div class="col-12 mt-4 mb-4 p-2 border">Resposta dos Correios:</div>



                <div class="col-12 col-xl-6 pt-2 pb-2">
                    <strong>Código de Entrega:</strong>
                    {{ $sale->trackingNumber }}
                </div>

                <div class="col-12 mt-4 mb-4 p-2 border-bottom"></div>
            </div>
        </div>

        <div class="col-12">
            <div class="row float-right mt-4 mb-4">
                <a class="btn btn-primary mb-4" href="{{ route('sales.index') }}"> Voltar</a>
            </div>
        </div>

    </div>
@endsection
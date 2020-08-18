@extends('layouts.app')
@section('content')

<section class="container mt-4 mb-4">
    @if (Cart::count() > 0)
    
        <!-- Avisos -->
        <div class="row">
            <div class="col-12">
                @if (session()->has('success_message'))
                <div class="alert alter-success bg-info text-white text-center">
                    {{ session()->get('success_message') }}
                </div>
                @endif
                @if (count($errors) > 0)
                <div class="alert alter-danger bg-danger text-white text-center">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach 
                    </ul>
                    {{ session()->get('success_message') }}
                </div>
                @endif
            </div>
        </div>
        <!-- Fim Avisos -->
        <!-- Content -->
        <div class="row pl-4 pr-4">
            <!-- Section -->
            <div class="col-12 col-xl-8">

                @foreach (Cart::content() as $item)
                <!-- linha de produto -->
                <div class="row mb-1 border rounded bg-white">

                    <!-- Foto do produto -->
                    <div class="col-3 col-xl-2">
                        <img style="width:auto;height:36px;" class="mt-2" src="{{ asset($item->model->image1 ?? null) }}" />
                    </div>

                    <!-- Nome do produto -->
                    <div class="col-9 col-xl-4">
                        <!-- <a class="product-title mt-2 text-black" href="/shop/{{ $item->model->category .'/'. $item->model->id }}">{{ $item->model->name ?? null }}</a> -->
                        <h6 class="product-title mt-2 text-black">{{ $item->model->name ?? null }}</h6>
                    </div>

                    <!-- Deletar o produto -->
                    <div class="col-4 col-xl-2 text-center text-xl-right">
                        <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-text mt-1 bg-light text-black"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </div>

                    <!-- Quantidade do produto -->
                    <div class="col-4 col-xl-2">
                        <form class="w-100 float-left" action="{{ route('cart.update', $item->rowId) }}" method="POST">
                            <div class="row">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <button type="submit" name="sub" value="down" class="w-25 btn btn-text bg-light text-black mt-1 float-left"><i class="fas fa-minus" style="font-size:.5em;margin-left:-.2em;"></i></button>
                                <input type="number" class="w-50 mt-1 pl-2 float-left border" name="qtd" value="{{ $item->qty }}" readonly>
                                <button type="submit" name="sub" value="up" class="w-25 btn btn-text bg-light text-black mt-1 float-left"><i class="fas fa-plus" style="font-size:.5em;margin-left:-.5em;"></i></button>
                            </div>
                        </form>
                    </div>

                    <!-- Valor do produto -->
                    <div class="col-4 col-xl-2 text-right">
                        <h6 class="product-title mt-3">R$ {{ number_format($item->model->price * $item->qty, 2, ',','') ?? null }}</h6>
                    </div>

                </div>
                <!-- Acaba linha de produto -->
                @endforeach
                
                @if(!!auth()->user())
                <div class="row mt-4 border rounded bg-white">
                    <!-- Cupom de desconto -->
                    <div class="col-12 col-xl-6 mt-xl-4 mt-4">
                        <input class="w-100 w-xl-50 p-2" type="text" name="cupom" placeholder="Cupom de desconto">
                    </div>
                    <!-- Valor da compra e do frete -->
                    <div class="col-12 col-xl-6 text-right mt-4">
                        <p>Valor da compra: R$ {{ str_replace('.', ',', $valor) ?? "error checkout 1" }}<br/>
                        Valor do frete<!-- (<a href="/client">mudar endereço?</a>) --> {{ "(".$frete[0]["name"] ."): R$ ". number_format($frete[0]["price"], 2, ',','') }} <!-- | {{ $frete[1]["name"] ." - R$ ". $frete[1]["price"] }} --></p>
                    </div>
                </div>
                @endif

                <!-- Valor total -->
                <div class="row border rounded pt-2 pt-xl-0 mb-4 bg-white text-black">
                    <div class="col-12 mt-2 mt-xl-4 mb-2 text-center text-xl-right">
                        <?php $cupom = null ?>
                        <h2>Total: R$ {{ number_format($valor + $frete[0]["price"] - $cupom, 2, ',','') ?? "error checkout total" }}</h2>
                    </div>
                </div>

            </div>

            <!-- Aside -->
            <div class="col-12 col-xl-4">
                <div class="row ml-xl-1 p-1 border rounded bg-white">
                    <h4 class="w-100 border-bottom pt-3 pb-4 mb-3 text-center">Resumo da Compra</h4>
                    <div class="col-12">
                        @if (!!auth()->user())
                        <p>Nome: <span><b>{{ auth()->user()->name ?? null }} {{ auth()->user()->lastname ?? null }}</b></span>
                            <br>CPF: <span><b>{{ auth()->user()->doc ?? null }}</b></span>
                        </p>
                        E-mail: <span><b>{{ auth()->user()->email ?? null }}</b></span>
                        <br>Telefone: <span><b>{{ auth()->user()->phone1 ?? null }}</b></span></p>
                        <p><span>{{ $end['street']  ?? null }}, 
                            {{ auth()->user()->number ?? null }}<br>
                            {{ auth()->user()->obs ?? null }}<br>
                            {{ $end['district']  ?? null }} - 
                            {{ $end['city']  ?? null }}/{{ $end['uf']  ?? null }}<br>
                            CEP: {{ $end['zipcode'] ?? null }} -
                            {{ auth()->user()->country ?? null }}</span>
                        </p>
                        @else
                        <p class="w-100 text-center">Para prosseguir, você precisa se identificar.</p>
                        @endif
                    </div>
                </div>
                <div class="row ml-xl-1 mt-2 p-0">
                    <div class="col-6 m-0 p-0">
                        <a href="/shop" class="w-100 btn btn-back float-left text-left">Voltar às compras</a>
                    </div>
                    <div class="col-6 m-0 p-0">
                        @if (!!auth()->user())
                        <a class="w-100 btn btn-success float-right" href="{{ route('checkout.index') }}">Ir para Pagamento</a>
                        @else
                        <a class="w-100 btn btn-success float-right" href="{{ route('client.index') }}">Login / Cadastro</a>
                        @endif
                    </div>
                </div>
            </div>
            <!-- Fim aside -->
        </div>
        <!-- Fim Content -->

    @else

        <div class="row">
            <div class="col-12">
                <p class="w-100 mt-3 p-2 border rounded text-center">Não tem produtos em seu carrinho.<br>
                <a href="{{ route('index') }}">Voltar às compras</a></p>
            </div>
        </div>

    @endif
</section>

@endsection
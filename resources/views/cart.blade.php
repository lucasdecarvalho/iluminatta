@extends('layouts.app')
@section('content')

<section class="container mb-2">
    @if (Cart::count() > 0)
    
        <div class="row mt-4 mb-3 pl-3 pr-2 p-xl-0 text-center text-xl-left">
            <div class="col-12 p-0 m-0">
                <h4><i class="fas fa-shopping-cart mr-2"></i><span>Carrinho de compras</span></h4>
            </div>
        </div>

        <!-- Avisos -->
        <div class="row pl-2 pr-2 p-xl-0">
            <div class="col-12 p-0 m-0">
                @if (session()->has('success_message'))
                <div class="alert alter-success bg-white text-black border rounded text-center">
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
        <div class="row pl-2 pr-2 p-xl-0">
            <!-- Section -->
            <div class="col-12 col-xl-8">

                @foreach (Cart::content() as $item)
                <!-- linha de produto -->
                <div class="row p-1 mb-1 border rounded bg-white">

                    <!-- Foto do produto -->
                    <div class="col-3 col-xl-2">
                        <img style="width:auto;height:36px;" class="m-1" src="{{ asset($item->model->image1 ?? null) }}" />
                    </div>

                    <!-- Nome do produto -->
                    <div class="col-9 col-xl-4">
                        <!-- <a class="product-title mt-2 text-black" href="/shop/{{ $item->model->category .'/'. $item->model->id }}">{{ $item->model->name ?? null }}</a> -->
                        <h6 class="mt-3 text-black">{{ $item->model->name ?? null }}</h6>
                    </div>

                    <!-- Deletar o produto -->
                    <div class="col-4 col-xl-2 text-left text-xl-right">
                        <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-text mt-1 bg-info text-white"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </div>

                    <!-- Quantidade do produto -->
                    <div class="col-4 col-xl-2">
                        <form class="w-100 float-left" action="{{ route('cart.update', $item->rowId) }}" method="POST">
                            <div class="row">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <button type="submit" name="sub" value="down" class="w-25 btn btn-text bg-light text-black mt-1 float-left rounded-left"><i class="fas fa-minus" style="font-size:.5em;margin-left:-.2em;"></i></button>
                                <input type="number" class="w-50 mt-1 pl-2 float-left border" name="qtd" value="{{ $item->qty }}" readonly>
                                <button type="submit" name="sub" value="up" class="w-25 btn btn-text bg-light text-black mt-1 float-left rounded-right"><i class="fas fa-plus" style="font-size:.5em;margin-left:-.5em;"></i></button>
                            </div>
                        </form>
                    </div>

                    <!-- Valor do produto -->
                    <div class="col-4 col-xl-2 text-right">
                        <h6 class="mt-3">R$ {{ number_format($item->model->price * $item->qty, 2, ',','') ?? null }}</h6>
                    </div>

                </div>
                <!-- Acaba linha de produto -->
                @endforeach
                
                @if(!!auth()->user())
                <div class="row mt-2 mb-2 border rounded bg-white">
                    <!-- Cupom de desconto -->
                    <div class="col-12 col-xl-6 mt-xl-3 mt-4 pb-4 border-xl border-bottom">
                        <input class="w-100 w-xl-50 p-2 border rounded" type="text" name="cupom" placeholder="Cupom de desconto">
                    </div>
                    <!-- Valor da compra e do frete -->
                    <div class="col-12 col-xl-6 text-center text-xl-right mt-3 border-bottom">
                        <p >Compra <i class="fas fa-shopping-basket"></i> R$ {{ str_replace('.', ',', $valor) ?? "error checkout 1" }}
                        <br>Entrega (Sedex) <i class="fas fa-truck"></i> {{ "R$ ". number_format($frete[0]["price"], 2, ',','') }} <!-- | {{ $frete[1]["name"] ." - R$ ". $frete[1]["price"] }} --></p>
                    </div>
                    <div class="col-6 text-center">
                        <a href="/shop" class="w-100 float-left mt-3"><i class="fas fa-undo-alt"></i> Voltar às compras</a>
                    </div>
                    <!-- Valor do total -->
                    <div class="col-6 text-right border-left mt-0 pl-0 pr-0">
                        <?php $cupom = null ?>
                        <h4 class="w-100 pt-3 pl-3 pr-3 pb-0 mb-3"><span style="font-size:.7em;">Total:</span> R$ {{ number_format($valor + $frete[0]["price"] - $cupom, 2, ',','') ?? "error checkout total" }}</h4>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-xl-6 border-top text-center">
                                <p class="mt-3 mb-3"><i class="fas fa-lock"></i> Compra segura. Parcele em até 12x.</p>
                            </div>
                            <div class="col-12 col-xl-6 mb-3 mb-xl-0 border-left">
                                @if (!!auth()->user())
                                <a class="w-100 btn btn-success float-right" href="{{ route('checkout.index') }}"><i class="far fa-credit-card"></i> Efetuar Pagamento</a>
                                @else
                                <a class="w-100 btn btn-info float-right" href="{{ route('client.index') }}">Login / Cadastro</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endif

            </div>

            <!-- Aside -->
            <div class="col-12 col-xl-4">
                <div class="row ml-xl-1 border rounded bg-white">
                    <h4 class="w-100 border-bottom p-3">Dados da Entrega</h4>
                    <div class="col-12">
                        @if (!!auth()->user())
                        <p><span>{{ auth()->user()->name ?? null }} {{ auth()->user()->lastname ?? null }}</span>
                            <br><span>{{ auth()->user()->doc ?? null }}</span>
                        </p>
                        <span>{{ auth()->user()->email ?? null }}</span>
                        <br><span>{{ auth()->user()->phone1 ?? null }}</span></p>
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
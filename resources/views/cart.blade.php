@extends('layouts.app')
@section('content')

   <!-- teste começo -->
   <div class="container mt-4 mb-4">
      <h2>Carrinho</h2>
      <div class="row">

         <div class="col-8 float-left">
            <!-- linha de produto -->
            <div class="row w-100 p-2 mb-4 border rounded">
               <div class="col-2 float-left">
                  <img style="width:57px;" src="{{ asset($product->image1) }}" />
               </div>
               <div class="col-5 float-left">
                  <p>Produto</p>
                  <h6 class="product-title">{{ $product->name ?? null }}</h6>
                  <p>{{ $product->details ?? null }}</p>
               </div>
               <div class="col-3 float-left">
                  <p>Quantidade</p>
                  <input type="number" name="qtd" value="1">
               </div>
               <div class="col-2 float-left">
                  <p>Subtotal</p>
                  <h6 class="product-title">R$ {{ $product->price ?? null }}</h6>
               </div>
            </div>
            <!-- linha de produto -->
            <div class="row w-100 p-2 mb-4 border rounded">
               <div class="col-2 float-left">
                  <img style="width:57px;" src="{{ asset($product->image1) }}" />
               </div>
               <div class="col-5 float-left">
                  <p>Produto</p>
                  <h6 class="product-title">{{ $product->name ?? null }}</h6>
                  <p>{{ $product->details ?? null }}</p>
               </div>
               <div class="col-3 float-left">
                  <p>Quantidade</p>
                  <input type="number" name="qtd" value="1">
               </div>
               <div class="col-2 float-left">
                  <p>Subtotal</p>
                  <h6 class="product-title">R$ {{ $product->price ?? null }}</h6>
               </div>
            </div>
            <!-- linha de produto -->
            <div class="row w-100 p-2 mb-4 border rounded">
               <div class="col-2 float-left">
                  <img style="width:57px;" src="{{ asset($product->image1) }}" />
               </div>
               <div class="col-5 float-left">
                  <p>Produto</p>
                  <h6 class="product-title">{{ $product->name ?? null }}</h6>
                  <p>{{ $product->details ?? null }}</p>
               </div>
               <div class="col-3 float-left">
                  <p>Quantidade</p>
                  <input type="number" name="qtd" value="1">
               </div>
               <div class="col-2 float-left">
                  <p>Subtotal</p>
                  <h6 class="product-title">R$ {{ $product->price ?? null }}</h6>
               </div>
            </div>

            <div class="row w-100 mt-4 mb-4 border rounded">
               <div class="col-8 mt-3">
                  <p>Tem um cupom desconto? Insira o código na caixa ao lado:</p>
               </div>
               <div class="col-4 text-right mt-3">
                  <input class="w-100" type="text" name="cupom" placeholder="Cupom de desconto" id="">
               </div>
            </div>
            <div class="row w-100">
               <div class="col-6">
                  <a href="/">Voltar às compras</a>
               </div>
               <div class="col-6 text-right">
                  <h2>Total: R$ 2.478,90</h2>
               </div>
            </div>
         </div>

         <div class="col-4">
            <div class="row w-100 p-2 border rounded" style="height:auto;">
               <h4 class="w-100 border-bottom pt-3 pb-4 mb-3 text-center">Resumo da Compra</h4>
               <div class="col-12">
                  <h6><b>Dados do comprador</b></h6>
                  <p>Nome: <span><b>{{ auth()->user()->name ?? null }}</b></span></p>
                  <p>CPF: <span><b>{{ auth()->user()->id ?? null }}</b></span></p>
                  
                  <h6><b>Contatos do comprador</b></h6>
                  <p>E-mail: <span><b>{{ auth()->user()->email ?? null }}</b></span></p>
                  <p>Telefone: <span><b>{{ auth()->user()->id ?? null }}</b></span></p>

                  <h6><b>Endereço de entrega</b></h6>
                  <p>Logradouro: <span></span></p>
                  <p>Número: <span></span></p>
                  <p>Bairro: <span></span></p>
                  <p>Cidade: <span></span></p>
                  <p>UF: <span></span></p>
                  <p>CEP: <span></span></p>
               </div>
               <a class="w-100 btn btn-success" href="{{ route('checkout') }}">Ir para Pagamento</a>
            </div>
         </div>

      </div>
   </div>
   <!-- teste fim -->

@endsection
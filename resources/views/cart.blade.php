@extends('layouts.app')
@section('content')

   <div class="container mt-4 mb-4">

      @if (Cart::count() > 0)

      <div class="row">

         <div class="col-xl-12 col-sm-12">

         <!-- <h2 class="float-left">Carrinho</h2> -->

         @if (session()->has('success_message'))
            <div class="alert alter-success">
               {{ session()->get('success_message') }}
            </div>
         @endif

         @if (count($errors) > 0)
            <div class="alert alter-danger">
               <ul>
                  @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                  @endforeach 
               </ul>
               {{ session()->get('success_message') }}
            </div>
         @endif

         </div>

         <div class="col-xl-8 col-sm-12 float-left">
            
            @foreach (Cart::content() as $item)

            <!-- linha de produto -->
            <div class="row w-100 p-2 mb-1 border rounded">
               <div class="col-2 float-left">
                  <img style="width:auto;height:36px;" class="mt-2" src="{{ asset($item->model->image1 ?? null) }}" />
               </div>
               <div class="col-4 float-left">
                  <h6 class="product-title mt-2">{{ $item->model->name ?? null }}</h6>
               </div>
               <div class="col-2 float-left">
                  <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                     {{ csrf_field() }}
                     {{ method_field('DELETE') }}
                     <button type="submit" class="btn btn-text mt-1">Remover</button>
                  </form>
               </div>
               <div class="col-2 float-left">
                  <input style="width:100%;" class="mt-2" type="number" name="qtd" value="1">
               </div>
               <div class="col-2 float-left">
                  <h6 class="product-title mt-3">R$ {{ number_format($item->model->price, 2, ',','') ?? null }}</h6>
               </div>
            </div>

            @endforeach

            <div class="row w-100 mt-4 mb-1 border rounded">
                  <!-- Valor da compra -->
                  <!-- Valor do frete -->
               <div class="col-12 text-right mt-4">
                  <p>Valor da compra: R$ {{ str_replace('.', ',', $valor) ?? "error checkout 1" }}</p>
                  <p>Valor do frete<!-- (<a href="/client">mudar endereço?</a>) --> {{ "(".$frete[0]["name"] ."): R$ ". number_format($frete[0]["price"], 2, ',','') }} <!-- | {{ $frete[1]["name"] ." - R$ ". $frete[1]["price"] }} --></p>
               </div>
            </div>
            <!-- Cupom de desconto -->
            <div class="row w-100 mt-0 mb-4 border rounded">
               <div class="col-sm-8 col-xl-8 mt-4 mb-2">
                  <p>Tem um cupom desconto? Insira o código na caixa ao lado:</p>
               </div>
               <div class="col-4 col-xl-4 text-right mt-4 mb-4">
                  <input class="w-100" type="text" name="cupom" placeholder="Cupom de desconto">
               </div>
            </div>
            <!-- Valor total -->
            <div class="row w-100">
               <div class="col-sm-6 col-xl-6 mt-0">
                  <a href="/shop" class="btn btn-secondary">Voltar às compras</a>
               </div>
               <div class="col-sm-4 col-xl-6 text-right">
                  <?php $cupom = null ?>
                  <h2>Total: R$ {{ number_format($valor + $frete[0]["price"] - $cupom, 2, ',','') ?? "error checkout total" }}</h2>
               </div>
            </div>
         </div>

         <div class="col-xl-4 col-sm-12">
            <div class="row w-100 p-2 border rounded" style="height:auto;">
               <h4 class="w-100 border-bottom pt-3 pb-4 mb-3 text-center">Resumo da Compra</h4>
               <div class="col-12">

                  @if (!!auth()->user())

                  <p>Nome: <span><b>{{ auth()->user()->name ?? null }} {{ auth()->user()->lastname ?? null }}</b></span>
                  <br>CPF: <span><b>{{ auth()->user()->doc ?? null }}</b></span></p>
                  
                  E-mail: <span><b>{{ auth()->user()->email ?? null }}</b></span>
                  <br>Telefone: <span><b>{{ auth()->user()->phone1 ?? null }}</b></span></p>

                  <p><span>{{ $end['street']  ?? null }}, 
                     {{ auth()->user()->number ?? null }} - 
                     {{ auth()->user()->obs ?? null }}<br>
                     {{ $end['district']  ?? null }} - 
                     {{ $end['city']  ?? null }}/{{ $end['uf']  ?? null }}<br>
                     CEP: {{ $end['zipcode'] ?? null }} -
                     {{ auth()->user()->country ?? null }}</span></p>

                  @else

                  <p class="w-100 text-center">Para prosseguir, você precisa se identificar.</p>

                  @endif

               </div>
               @if (!!auth()->user())

               <a class="w-100 btn btn-success" href="{{ route('checkout.index') }}">Ir para Pagamento</a>

               @else

               <a class="w-100 btn btn-success" href="{{ route('client.index') }}">Fazer login / Cadastre-se</a>

               @endif

            </div>


         </div>

      </div>

      @else

      <div class="row w-100 p-2 border rounded text-center">
         <p class="w-100 text-center mt-3">Não tem produtos em seu carrinho. <a href="{{ route('index') }}">Volte para as compras</a></p>
      </div>

      @endif

   </div>

@endsection
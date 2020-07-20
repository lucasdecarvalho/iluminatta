@extends('layouts.app')
@section('content')

   <!-- teste começo -->
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
                  <img style="width:auto;height:36px;" src="{{ asset($item->model->image1 ?? null) }}" />
               </div>
               <div class="col-4 float-left">
                  <h6 class="product-title">{{ $item->model->name ?? null }}</h6>
                  <p>{{ $item->model->details ?? null }}</p>
               </div>
               <div class="col-2 float-left">
                  <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                     {{ csrf_field() }}
                     {{ method_field('DELETE') }}
                     <button type="submit" class="btn btn-text">Remover</button>
                  </form>
               </div>
               <div class="col-2 float-left">
                  <input style="width:100%;" type="number" name="qtd" value="1">
               </div>
               <div class="col-2 float-left">
                  <h6 class="product-title">R$ {{ $item->model->price ?? null }}</h6>
               </div>
            </div>

            @endforeach

            <div class="row w-100 mt-4 mb-4 border rounded">
               <div class="col-sm-8 col-xl-8 mt-3">
                  <p>Tem um cupom desconto? Insira o código na caixa ao lado:</p>
               </div>
               <div class="col-4 col-xl-4 text-right mt-3">
                  <input class="w-100" type="text" name="cupom" placeholder="Cupom de desconto" id="">
               </div>
            </div>
            <div class="row w-100">
               <div class="col-sm-6 col-xl-6">
                  <a href="/">Voltar às compras</a>
               </div>
               <div class="col-sm-4 col-xl-6 text-right">
                  <h2>Total: R$ {{ Cart::total() }}</h2>
               </div>
            </div>
         </div>

         <div class="col-xl-4 col-sm-12">
            <div class="row w-100 p-2 border rounded" style="height:auto;">
               <h4 class="w-100 border-bottom pt-3 pb-4 mb-3 text-center">Resumo da Compra</h4>
               <div class="col-12">

                  @if (!!auth()->user())

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
   <!-- teste fim -->

@endsection
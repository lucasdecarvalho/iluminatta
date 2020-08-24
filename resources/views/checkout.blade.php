@extends('layouts.app')
@section('content')

<section class="container p-4">
    @if (Cart::count() > 0)

   <div class="row mt-2 mb-2 text-center text-xl-left">
      <div class="col-12 col-xl-6">
         <h4><i class="fas fa-money-check-alt mr-2"></i><span>Checkout</span></h4>
      </div>
      <div class="col-12 col-xl-6 text-center text-xl-right">
            <p><i class="fas fa-lock"></i> Compra segura</p>
      </div>
   </div>

   <!-- avisos -->
   <div class="row">
      <div class="col-12 p-0">
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
   <!-- fim avisos -->

   <!-- content -->
   <div class="row">
      <!-- section -->
      <div class="col-12">
         
         <div class="row border rounded-top bg-light">
            <!-- cupom de desconto -->
            <div class="col-12 col-xl-6 mt-2 mb-2">
               <input class="w-100 p-2 border rounded" type="text" name="cupom" placeholder="Cupom de desconto">
            </div>
            <!-- valor do total -->
            <div class="col-12 col-xl-6 text-center text-xl-right">
               <h4 class="w-100 pt-3"><span style="font-size:.7em;">Total:</span> R$ {{ $shop->fmt_final }}</h4>
            </div>
         </div>

         <div class="row border border-top-0 rounded-bottom bg-white">
            <div class="col-12 col-xl-6 d-none d-xl-block">
               <div class="row">
                  <div class="col-12 p-3">
                  <h4>Dados da compra</h4>

                     @if (!!auth()->user())
                     <h6><b>Comprador(a):</b></h6>
                     <p><span>{{ auth()->user()->name ?? null }} {{ auth()->user()->lastname ?? null }}</span>
                           <br><span>{{ auth()->user()->doc ?? null }}</span></p>
                     
                     <h6><b>Contato:</b></h6>
                     <p><span>{{ auth()->user()->email ?? null }}</span>
                     <br><span>{{ auth()->user()->phone1 ?? null }}</span></p>

                     <h6><b>Endereço de entrega:</b></h6>
                     <p><span>{{ auth()->user()->address ?? null }}, 
                           {{ auth()->user()->number ?? null }}<br>
                           {{ auth()->user()->obs ?? null }}<br>
                           {{ auth()->user()->neigh ?? null }} - 
                           {{ auth()->user()->city ?? null }}/{{ auth()->user()->state ?? null }}<br>
                           CEP: {{ auth()->user()->zipcode ?? null }} -
                           {{ auth()->user()->country ?? null }}</span>
                     </p>
                     @else
                     <p class="w-100 mt-4 text-center">Para prosseguir, é preciso se logar.</p>
                     <a class="w-100 btn btn-info float-right mb-4 text-white" href="{{ route('client.index') }}"><i class="fas fa-sign-in-alt"></i> Login / Cadastro</a>
                     @endif
                  </div>                          
               </div>
            </div>
            <div class="col-12 col-xl-6">
               <div class="row border-left">
                  <div class="col-12 p-3">
                  <h4>Forma de Pagamento</h4>
                     <div class="col-12">
                        <div class="row">
                           <form action="" method="">
                              <button class="btn btn-light active">Crédito</button>
                              <button class="btn btn-light">Débito</button>
                              <button class="btn btn-light">Boleto</button>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 pb-2">
                     <!-- form credit -->
                     <form class="needs-validation" action="{{ route('checkout.index') }}" method="POST">
                        @csrf
                        <!-- <div class="row">
                           <div class="col-12 mt-3 mb-2">
                              <div class="custom-control custom-radio">
                                    <label class="custom-control-label" for="credit">Cartão de crédito</label>
                                    <input id="credit" name="paymentMethod1" type="radio" class="custom-control-input" checked>
                              </div>
                              <div class="custom-control custom-radio">
                                    <label class="custom-control-label" for="debit">Cartão de débito</label>
                                    <input id="credit" name="paymentMethod2" type="radio" class="custom-control-input">
                              </div>
                           </div>
                        </div> -->
                        <div class="row">
                           <div class="col-12 mb-2">
                              <select class="form-control" name="flag" id="flag" required>
                                    <option value="">Bandeira:</option>
                                    <option value="elo">Elo</option>
                                    <option value="dinners">Dinners</option>
                                    <option value="mastercard">Mastercard</option>
                                    <option value="visa">Visa</option>
                              </select>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-12 mb-2">
                              <input type="number" name="numberCard" class="form-control" id="cc-number" placeholder="Número do cartão:" required>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-12 mb-2">
                              <select class="form-control" name="installments" id="installments" required>
                              <option value="">Parcelamento:</option>
                              <option value="1">À vista</option>
                              <option value="2">02</option>
                              <option value="3">03</option>
                              <option value="4">04</option>
                              <option value="5">05</option>
                              <option value="6">06</option>
                              <option value="7">07</option>
                              <option value="8">08</option>
                              <option value="9">09</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                              </select>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-6 mb-2 pr-0">
                              <input type="text" name="date" class="form-control" id="cc-expiration" placeholder="_ _ / _ _ _ _" required>
                           </div>
                           <div class="col-6 mb-2">
                              <input type="text" name="cvv" class="form-control" id="cc-cvv" placeholder="CVV:" required>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-12 mb-2">
                              <input type="text" name="holder" class="form-control" id="cc-name" placeholder="Nome completo (como impresso no cartão):" required>
                              <!-- <small class="text-muted"></small> -->
                           </div>
                           <!-- <div class="col-12 mb-2">
                              <input type="number" name="doc" class="form-control" id="cc-number" placeholder="CPF:" required>
                           </div> -->
                        </div>
                        <div class="row">
                           <div class="col-12">
                              <button class="btn btn-primary btn-block" type="submit"><i class="far fa-credit-card"></i> Efetuar Pagamento</button>
                           </div>
                        </div>
                     </form>
                  </div> <!-- fim form credit -->
               </div>
            </div>
         </div>
      </div> <!-- fim section -->
   </div> <!-- fim content -->

   @else

   <div class="row">
      <div class="col-12">
            <p class="w-100 mt-3 p-2 border rounded text-center">Não tem produtos em seu carrinho.<br>
            <a href="{{ route('index') }}">Volte às compras</a></p>
      </div>
   </div>

   @endif
</section>

@endsection
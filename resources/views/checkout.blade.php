@extends('layouts.app')
@section('content')

   <!-- teste começo -->
   <div class="flex-center position-ref full-height mb-4">
      <div class="container">
         <div class="row justify-content-center mt-4 mb-3">
            <div class="col-xl-6 col-sm-12">
               <form class="needs-validation" action="{{ route('checkout.index') }}" method="POST">
                  @csrf

                  <h4 class="mb-3">Pagamento com cartão de crédito</h4>
                  <hr class="mb-4">

                  <div class="d-none my-3">
                     <div class="custom-control custom-radio">
                        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                        <label class="custom-control-label" for="credit">Cartão de crédito</label>
                     </div>
                  </div>
                  <div class="row">
                  <div class="col-md-6 mb-3">
                     <label for="cc-name">Nome completo:</label>
                     <input type="text" name="holder" class="form-control" id="cc-name" required>
                     <small class="text-muted">Nome completo como impresso no cartão.</small>
                  </div>
                  <div class="col-md-6 mb-3">
                     <label for="cc-number">Número do cartão:</label>
                     <input type="number" name="numberCard" class="form-control" id="cc-number" required>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-md-4 mb-3">
                     <label for="flag">Bandeira:</label>
                     <select class="form-control" name="flag" id="flag" required>
                        <option value="">Selecione...</option>
                        <option value="Elo">Elo</option>
                        <option value="Dinners">Dinners</option>
                        <option value="MASTERCARD">Mastercard</option>
                        <option value="Visa">Visa</option>
                     </select>
                  </div>
                  <div class="col-md-3 mb-3">
                     <label for="cc-expiration">Data de exp.</label>
                     <input type="text" name="date" class="form-control" id="cc-expiration" placeholder="_ _ / _ _ _ _" required>
                  </div>
                  <div class="col-md-2 mb-3">
                     <label for="cc-cvv">CVV:</label>
                     <input type="text" name="cvv" class="form-control" id="cc-cvv" placeholder="***" required>
                  </div>
                  <div class="col-md-3 mb-3">
                     <label>Valor total (R$):</label>
                     <input type="text" name="price" class="form-control" id="" placeholder="" value="<?= $valor = str_replace('.', '',Cart::total()); ?>" required readonly>
                  </div>
                  </div>
                  <hr class="mb-4">
                  <button class="btn btn-primary btn-lg btn-block" type="submit">Pagar agora</button>
               </form>
            </div>
         </div>
      </div>
   </div>
   <!-- teste fim -->

@endsection
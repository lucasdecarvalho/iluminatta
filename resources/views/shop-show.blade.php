@extends('layouts.app')
@section('content')

   <!-- Content -->
   <div class="container">
      <div class="card">
         <div class="container-fliud">
            <div class="wrapper row">
               <div class="preview col-md-6">
                  
                  <div class="preview-pic tab-content">
                     <div class="tab-pane active" id="pic-1"><img src="{{ asset($product->image1 ?? 'images/no-image.png' ) }}" /></div>
                     <div class="tab-pane" id="pic-2"><img src="{{ asset($product->image2 ?? 'images/no-image.png' ) }}" /></div>
                     <div class="tab-pane" id="pic-3"><img src="{{ asset($product->image3 ?? 'images/no-image.png' ) }}" /></div>
                  </div>
                  <ul class="preview-thumbnail nav nav-tabs">
                     <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="{{ asset($product->image1 ?? 'images/no-image.png' ) }}" /></a></li>
                     <li><a data-target="#pic-2" data-toggle="tab"><img src="{{ asset($product->image2 ?? 'images/no-image.png' ) }}" /></a></li>
                     <li><a data-target="#pic-3" data-toggle="tab"><img src="{{ asset($product->image3 ?? 'images/no-image.png' ) }}" /></a></li>
                  </ul>
                  
               </div>
               <div class="details col-md-6">
                  <h3 class="product-title">{{ $product->name ?? null }}</h3>
                  <p class="product-description">{{ $product->caption ?? null }}</p>
                  <p class="product-description">{{ $product->details ?? null }}</p>
                  <h4 class="price"><span>R$ {{ $product->price ?? null }}</span></h4>
                  <div class="action">
                     <form action="{{ route('cart.store') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="name" value="{{ $product->name }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">
                        <button type="submit" class="btn btn-success">Adicionar ao carrinho</button>
                     </form>
                     <!-- <button class="btn btn-secondary" type="button"><span class="fa fa-heart"></span></button> -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Content end -->
   <!-- Content -->
   <div class="container">
      <div class="card-deck mt-4 mb-4">
         <h2 class="w-100 m-0 text-center">Produtos Relacionados</h2>
         <div class="card border-0">
            <a href="#">
            <img class="card-img-top" src="https://www.urbandecay.com/dw/image/v2/AANG_PRD/on/demandware.static/-/Sites-urbandecay-master-catalog/default/dw064a1845/ProductImages/Sets/2020%20Sets/Urban-Decay-Makeup-Sets-Stay-Naked-All-Nighter-Face-Primer.jpg?sw=250&sh=250&sm=fit&q=70" alt="Card image cap">
            </a>
            <div class="card-body">
               <h5 class="card-title">Card title</h5>
               <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
               <p class="card-text">$22</p>
            </div>
         </div>
         <div class="card border-0">
            <a href="#">
            <img class="card-img-top" src="https://www.urbandecay.com/dw/image/v2/AANG_PRD/on/demandware.static/-/Sites-urbandecay-master-catalog/default/dw064a1845/ProductImages/Sets/2020%20Sets/Urban-Decay-Makeup-Sets-Stay-Naked-All-Nighter-Face-Primer.jpg?sw=250&sh=250&sm=fit&q=70" alt="Card image cap">
            </a>
            <div class="card-body">
               <h5 class="card-title">Card title</h5>
               <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
               <p class="card-text">$39</p>
            </div>
         </div>
         <div class="card border-0">
            <a href="#">
            <img class="card-img-top" src="https://www.urbandecay.com/dw/image/v2/AANG_PRD/on/demandware.static/-/Sites-urbandecay-master-catalog/default/dw064a1845/ProductImages/Sets/2020%20Sets/Urban-Decay-Makeup-Sets-Stay-Naked-All-Nighter-Face-Primer.jpg?sw=250&sh=250&sm=fit&q=70" alt="Card image cap">
            </a>
            <div class="card-body">
               <h5 class="card-title">Card title</h5>
               <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
               <p class="card-text">$19</p>
            </div>
         </div>
      </div>
   </div>
   <!-- Content end -->

@endsection
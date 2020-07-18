@extends('layouts.app')
@section('content')

   <!-- Content -->
   <div class="container">
      <div class="card-deck mt-4 mb-4">
         <h2 class="w-100 m-2 text-center">Página geral de produtos</h2>

         @foreach ($products as $product)
            <div class="card border-0">
               <a href="{{ route('shop.show',[$slug,$product->id]) }}">
               <img class="card-img-top" src="{{ asset($product->image1 ?? null) }}" alt="{{ $product->name ?? null }}">
               </a>
               <div class="card-body">
                  <h5 class="card-title">{{ $product->name ?? null }}</h5>
                  <p class="card-text">{{ $product->details ?? null }}</p>
                  <p class="card-text">$ {{ $product->price ?? null }}</p>
               </div>
            </div>
         @endforeach

      </div>
   </div>
   <!-- Content end -->

@endsection
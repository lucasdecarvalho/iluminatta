@extends('layouts.app')
@section('content')

   <!-- Content -->
   <div class="container">
      <div class="card-deck mt-4 mb-4">
         <h2 class="w-100 m-2 text-center">{{ $title }}</h2>

         @foreach ($products as $product)
         <div class="col-sm-3">
            <div class="card text-center">
               <a href="{{ route('shop.show',[$product->category,$product->id]) }}">
               <img class="card-img-top" style="width:auto !important;height:120px;" src="{{ asset($product->image1) }}" alt="{{ $product->name ?? null }}">
               </a>
               <div class="card-body" style="height:140px;">
                  <h5 class="card-title">{{ $product->name ?? null }}</h5>
                  <!-- <p class="card-text">{{ $product->details ?? null }}</p> -->
                  <p class="card-text">R$ {{ $product->price ?? null }}</p>
               </div>
            </div>
         </div>
         @endforeach

      </div>
   </div>
   <!-- Content end -->

@endsection
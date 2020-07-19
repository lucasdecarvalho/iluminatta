@extends('layouts.app')
@section('content')
   <!-- Slider -->
   <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img class="d-block w-100" src="https://www.urbandecay.com/dw/image/v2/AANG_PRD/on/demandware.static/-/Sites-urbandecay-us-Library/default/dw15c39db0/images/homepage/hero-slider/25PercentOFF_ANSS_ONS_M1.jpg?sw=1680&sh=750&sm=fit&q=70" alt="First slide">
            </div>
            <div class="carousel-item">
               <img class="d-block w-100" src="https://www.urbandecay.com/dw/image/v2/AANG_PRD/on/demandware.static/-/Sites-urbandecay-us-Library/default/dwb3a6b667/images/homepage/M5/CodeFriends_25_GWP_ONS_M1_CHOICE.jpg?sw=1680&sh=750&sm=fit&q=70" alt="First slide">
         </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
      </a>
   </div>
   <!-- Slide end -->
   <!-- Content -->
   <div class="container">
      <div class="card-deck mt-4 mb-4">
         <h2 class="w-100 m-2 text-center">DESTAQUES</h2>

         @foreach ($pr as $product)
         <div class="col-3">
            <div class="card border-0">
               <a href="{{ route('shop.show',[$product->category,$product->id]) }}">
               <img class="card-img-top" src="{{ asset($product->image1) }}" alt="{{ $product->name ?? null }}">
               </a>
               <div class="card-body">
                  <h5 class="card-title">{{ $product->name ?? null }}</h5>
                  <p class="card-text">{{ $product->details ?? null }}</p>
                  <p class="card-text">$ {{ $product->price ?? null }}</p>
               </div>
            </div>
         </div>
         @endforeach

      </div>
   </div>
   <!-- Content end -->
   <!-- Slider -->
   <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img class="d-block w-100" src="https://www.urbandecay.com/dw/image/v2/AANG_PRD/on/demandware.static/-/Sites-urbandecay-us-Library/default/dwb3a6b667/images/homepage/M5/CodeFriends_25_GWP_ONS_M1_CHOICE.jpg?sw=1680&sh=750&sm=fit&q=70" alt="Second slide">
         </div>
         <div class="carousel-item">
            <img class="d-block w-100" src="https://www.urbandecay.com/dw/image/v2/AANG_PRD/on/demandware.static/-/Sites-urbandecay-us-Library/default/dw15c39db0/images/homepage/hero-slider/25PercentOFF_ANSS_ONS_M1.jpg?sw=1680&sh=750&sm=fit&q=70" alt="First slide">
         </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
      </a>
   </div>
   <!-- Slide end -->
   <!-- Content -->
   <div class="container">
      <div class="card-deck mt-4 mb-4">
         <div class="card border-0">
            <a href="details">
            <img class="rounded-circle w-100" src="https://www.urbandecay.com/dw/image/v2/AANG_PRD/on/demandware.static/-/Sites-urbandecay-us-Library/default/dwc92530df/loyalty/loyalty-homepage-slot.jpg?sw=340&sh=340&sm=fit&q=70" alt="Card image cap">
            </a>
            <div class="card-body">
               <h5 class="card-title">Card title</h5>
               <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
               <button class="btn btn-outline-success my-2 my-sm-0" type="submit">BECOME A MEMBER/LOG IN</button>
            </div>
         </div>
         <div class="card border-0">
            <a href="details">
            <img class="rounded-circle w-100" src="https://www.urbandecay.com/dw/image/v2/AANG_PRD/on/demandware.static/-/Sites-urbandecay-us-Library/default/dwc96c0716/images/homepage/G2/UDAllAccess_G123_110515.jpg?sw=340&sh=340&sm=fit&q=70" alt="Card image cap">
            </a>
            <div class="card-body">
               <h5 class="card-title">Card title</h5>
               <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
               <button class="btn btn-outline-success my-2 my-sm-0" type="submit">CHECK IT OUT</button>
            </div>
         </div>
         <div class="card border-0">
            <a href="details">
            <img class="card-img-top" src="https://www.urbandecay.com/dw/image/v2/AANG_PRD/on/demandware.static/-/Sites-urbandecay-us-Library/default/dw55235f2f/images/homepage/G3/UVEdge_G3_030815.jpg?sw=340&sh=340&sm=fit&q=70" alt="Card image cap">
            </a>
            <div class="card-body">
               <h5 class="card-title">Card title</h5>
               <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
               <button class="btn btn-outline-success my-2 my-sm-0" type="submit">LEARN MORE</button>
            </div>
         </div>
      </div>
   </div>
   <!-- Content end -->

@endsection
@extends('layouts.app')
@section('content')
   <!-- Slider -->
   @if(!!$fbt)
   <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            @if(!empty($fbt->target)) <a href="{{ $fbt->target }}"> @endif
               <img class="d-block w-100" src="{{ asset($fbt->path) }}" alt="{{ $fbt->title }}">
            @if(!empty($fbt->target)) </a> @endif
         </div>
         @foreach ($slides as $slide)
            @if ($slide->place == 1 && $slide->path !== $fbt->path)
               <div class="carousel-item">
                  @if(!empty($slide->target)) <a href="{{ $slide->target }}"> @endif
                     <img class="d-block w-100" src="{{ asset($slide->path) }}" alt="{{ $slide->title }}">
                  @if(!empty($slide->target)) </a> @endif
               </div>
            @endif
         @endforeach
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
   @endif
   <!-- Slide end -->
   <!-- Content -->
   <div class="container">
      <div class="card-deck mt-4 mb-4">
         <h2 class="w-100 m-2 text-center">DESTAQUES</h2>

         @foreach ($pr as $product)
         <div class="col-12 col-xl-3">
            <div class="card text-center">
               <a href="{{ route('shop.show',[$product->category,$product->id]) }}">
               <img class="card-img-top" style="width:auto;height:140px;margin: 0 auto;" src="{{ asset($product->image1 ?? 'images/no-image.png') }}" alt="{{ $product->name ?? null }}">
               </a>
               <div class="card-body" style="height:140px;">
                  <h5 class="card-title">{{ $product->name ?? null }}</h5>
                  <!-- <p class="card-text">{{ $product->details ?? null }}</p> -->
                  <p class="card-text">R$ {{ number_format($product->price,2,",",".") }}</p>
               </div>
            </div>
         </div>
         @endforeach

      </div>
   </div>
   <!-- Content end -->
   <!-- Slider -->
   @if(!!$fbb)
   <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            @if(!empty($fbb->target)) <a href="{{ $fbb->target }}"> @endif
               <img class="d-block w-100" src="{{ asset($fbb->path) }}" alt="{{ $fbb->title }}">
               @if(!empty($fbb->target)) </a> @endif
         </div>
         @foreach ($slides as $slide)
            @if ($slide->place == 2 && $slide->path !== $fbb->path)
               <div class="carousel-item">
                     @if(!empty($slide->target)) <a href="{{ $slide->target }}"> @endif
                     <img class="d-block w-100" src="{{ asset($slide->path) }}" alt="{{ $slide->title }}">
                     @if(!empty($slide->target)) </a> @endif
               </div>
            @endif
         @endforeach
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
   @endif
   <!-- Slide end -->
   <!-- Content -->
   <div class="container">
      <div class="card-deck mt-4 mb-4">
      @foreach ($banners as $banner)
         @if ($banner->place == 3)
                  
         <div class="col-12 col-md-4">
         <div class="card border-0">
            <img class="rounded w-100" src="{{ asset($banner->path) }}" alt="{{ asset($banner->title) }}">
            <div class="card-body">
               <h5 class="card-title">{{ $banner->title ?? null }}</h5>
               <p class="card-text">{{ $banner->caption ?? null }}</p>
               @if(!empty($banner->target))<a href="{{ asset($banner->target ?? null) }}" class="btn btn-outline-success my-2 my-sm-0" target="_blank">Saiba Mais</a> @endif
            </div>
         </div>
         </div>

         @endif
         @endforeach

         @foreach ($banners as $banner)
         @if ($banner->place == 4)
                  
         <div class="col-12 col-md-4">
         <div class="card border-0">
            <img class="rounded w-100" src="{{ asset($banner->path) }}" alt="{{ asset($banner->title) }}">
            <div class="card-body">
               <h5 class="card-title">{{ $banner->title ?? null }}</h5>
               <p class="card-text">{{ $banner->caption ?? null }}</p>
               @if(!empty($banner->target))<a href="{{ asset($banner->target ?? null) }}" class="btn btn-outline-success my-2 my-sm-0" target="_blank">Saiba Mais</a> @endif
            </div>
         </div>
         </div>

         @endif
         @endforeach

         @foreach ($banners as $banner)
         @if ($banner->place == 5)
                  
         <div class="col-12 col-md-4">
         <div class="card border-0">
            <img class="rounded w-100" src="{{ asset($banner->path) }}" alt="{{ asset($banner->title) }}">
            <div class="card-body">
               <h5 class="card-title">{{ $banner->title ?? null }}</h5>
               <p class="card-text">{{ $banner->caption ?? null }}</p>
               @if(!empty($banner->target))<a href="{{ asset($banner->target ?? null) }}" class="btn btn-outline-success my-2 my-sm-0" target="_blank">Saiba Mais</a> @endif
            </div>
         </div>
         </div>

         @endif
         @endforeach

      </div>
   </div>
   <!-- Content end -->

@endsection
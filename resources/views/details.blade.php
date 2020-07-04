@extends('layouts.app')

@section('content')

   <!-- teste começo -->
   <div class="container">
      <div class="card">
         <div class="container-fliud">
            <div class="wrapper row">
               <div class="preview col-md-6">
                  
                  <div class="preview-pic tab-content">
                  <div class="tab-pane active" id="pic-1"><img src="https://ph-cdn3.ecosweb.com.br/imagens01/foto/moda-feminina/vestido-curto/vestido-bordo-assimetrico-com-alcas_277169_600_1.jpg" /></div>
                  <div class="tab-pane" id="pic-2"><img src="https://ph-cdn3.ecosweb.com.br/imagens01/foto/moda-feminina/vestido-curto/vestido-xadrez-flor-mangas-7-8-abertura-sino_308713_600_1.jpg" /></div>
                  <div class="tab-pane" id="pic-3"><img src="https://ph-cdn3.ecosweb.com.br/imagens01/foto/moda-feminina/macaquinho/macaquinho-chumbo-com-decote-transpassado_312263_600_1.jpg" /></div>
                  </div>
                  <ul class="preview-thumbnail nav nav-tabs">
                  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="https://ph-cdn3.ecosweb.com.br/imagens01/foto/moda-feminina/vestido-curto/vestido-bordo-assimetrico-com-alcas_277169_600_1.jpg" /></a></li>
                  <li><a data-target="#pic-2" data-toggle="tab"><img src="https://ph-cdn3.ecosweb.com.br/imagens01/foto/moda-feminina/vestido-curto/vestido-xadrez-flor-mangas-7-8-abertura-sino_308713_600_1.jpg" /></a></li>
                  <li><a data-target="#pic-3" data-toggle="tab"><img src="https://ph-cdn3.ecosweb.com.br/imagens01/foto/moda-feminina/macaquinho/macaquinho-chumbo-com-decote-transpassado_312263_600_1.jpg" /></a></li>
                  </ul>
                  
               </div>
               <div class="details col-md-6">
                  <h3 class="product-title">men's shoes fashion</h3>
                  <!-- <div class="rating">
                     <div class="stars">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                     </div>
                     <span class="review-no">41 reviews</span>
                  </div> -->
                  <p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
                  <p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
                  <h4 class="price">current price: <span>$180</span></h4>
                  <!-- <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p> -->
                  <!-- <h5 class="sizes">sizes:
                     <span class="size" data-toggle="tooltip" title="small">s</span>
                     <span class="size" data-toggle="tooltip" title="medium">m</span>
                     <span class="size" data-toggle="tooltip" title="large">l</span>
                     <span class="size" data-toggle="tooltip" title="xtra large">xl</span>
                  </h5> -->
                  <!-- <h5 class="colors">colors:
                     <span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
                     <span class="color green"></span>
                     <span class="color blue"></span>
                  </h5> -->
                  <div class="action">
                     <button class="btn btn-success" type="button">Adicionar ao carrinho</button>
                     <button class="btn btn-secondary" type="button"><span class="fa fa-heart"></span></button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- teste fim -->
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
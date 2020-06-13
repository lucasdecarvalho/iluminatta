<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Styles -->
      <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
      <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset('css/details.css') }}" rel="stylesheet" type="text/css">
      <!-- Scripts -->
      <!-- <script src="{{asset('js/app.js')}}" defer></script> -->
      <title>Laravel</title>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600&Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
      <style>
         a {
            text-decoration: none !important;
         }
         ul {
            list-style: none;
         }
         #carouselExampleControls {
         width:100%;
         height:auto;
         background:#f90;
         }
         h1 {
            font-family: 'Libre Baskerville', serif;
            font-size:42px;
            color:#fff;
         }
         .slide {
         overflow:hidden;
         }
         @media (min-width: 800px)
         {
         #menuItens {
         top:40px;
         }
         }
      </style>
   </head>
   <body>
      <div class="flex-center position-ref full-height bg-white">
         <!-- header -->
         <div class="navbar p-1" style="background:#b08bbe;">
            <span class="w-100 text-center text-light">FRIENDS & FANATICS IS HAPPENING! Get 25% OFF + free ship. Spend $60 and get a free gift. Code: FRIENDS25</span>
         </div>
         <nav class="navbar sticky-top navbar-expand-lg navbar-dark d-none d-lg-block pt-0 pb-0" style="background:#2c1b47;border-bottom: solid 1px rgba(157, 111, 174, .3);">
            <div class="collapse navbar-collapse" id="navbarText">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="#">1.800.784.8722 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Store Locator</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="home">Sign Up for Email Newsletter</a>
                  </li>
               </ul>
               <span class="navbar-text p-0">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="#">USA</a>
                     </li>
                     <li class="nav-item">
                     <a class="nav-link" href="home">Sign in / Register</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Carrinho</a>
                     </li>
                  </ul>
               </span>
            </div>
         </nav>
         <div class="navbar navbar-light justify-content-between d-none d-lg-block p-lg-0" style="background:#2c1b47">
            <div class="row">
               <div class="col-4">
                  <!--  -->
               </div>
               <div class="col-lg-4 col-sm-12 text-center">
                  <a href="/iluminatta"><h1>Iluminatta</h1></a>
               </div>
               <div class="col-4">
                  <form class="form-inline mt-3 float-right w-75">
                     <input class="form-control mr-sm-2 w-100" type="search" placeholder="Search" aria-label="Search">
                     <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
                  </form>   
               </div>
            </div>
         </div>
         <div class="navbar sticky-top navbar-expand-lg navbar-dark pt-0 pb-0 m-0" id="menuItens" style="background:#2c1b47;">
            <div class="row w-100 p-0 m-0 d-sm-none d-block">
               <div class="col-9 d-sm-none d-block float-left">
                     <a href="/iluminatta"><h1 class="mt-1">Iluminatta</h1></a>
               </div>
               <div class="col-3 float-right mt-3">
                  <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarText" aria-expanded="true" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                  </button>
               </div>
            </div>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
               <ul class="navbar-nav">
                  <li><a class="nav-item nav-link active" href="#"><i class="fa fa-bars" aria-hidden="true"></i> SHOP <span class="sr-only">(current)</span></a></li>
                  <li><a class="nav-item nav-link" href="#">WHAT`S NEW</a></li>
                  <li><a class="nav-item nav-link" href="#">MAKE UP</a></li>
                  <li><a class="nav-item nav-link" href="#">FOUNDATION FINDER</a></li>
                  <li><a class="nav-item nav-link" href="#">LEGENDS NEVER FADE</a></li>
                  <li><a class="nav-item nav-link" href="#">NAKED PALETTES</a></li>
                  <li><a class="nav-item nav-link" href="#">VIRTUAL TRY ON</a></li>
               </ul>
            </div>
         </div>
         <!-- header end -->
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
         <!-- Footer -->
         <footer class="text-light" style="background:#2c1b47;">
            <div class="footer-head" style="background:#2c1b47;border-bottom: solid 1px rgba(157, 111, 174, .3);">
               <div class="container p-4">
                  <div class="row">
                     <div class="col-sm">
                        <div class="row">
                           <form class="form-inline mb-3 w-50">
                              <input class="form-control mr-sm-2 w-100" type="search" placeholder="Enter your e-mail" aria-label="Search">
                              <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Assinar</button> -->
                           </form>
                        </div>
                        <div class="row">
                           <span>This sign up is for U.S. consumers. By registering, your information will be collected and used in the US subject to our US Privacy Policy and Terms of Use. Non-US consumers should visit the country website serving their region.</span>
                        </div>
                     </div>
                     <div class="col-sm">
                        <div class="row">
                            <ul class="mt-3" style="font-size:3rem;">
                                <li class="float-left m-2"><a class="text-light" href="http://" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                                <li class="float-left m-2"><a class="text-light" href="http://" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
                                <li class="float-left m-2"><a class="text-light" href="http://" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li class="float-left m-2"><a class="text-light" href="http://" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container p-4">
               <div class="row">
                  <div class="col-sm">
                     <div class="row">
                        <h4>Sobre</h4>
                        <p>Badass cruelty-free, high-pigment makeup. Born in Southern California. Color that goes all day and lasts all night. Reinvention over perfection. Inspiration without replication. Kindness over cruelty. Unsubscribe from beauty telling you to be pretty. Be whatever you want to be. PRETTY DIFFERENT.</p>
                     </div>
                     <div class="row">
                        <p>Selos</p>
                     </div>
                  </div>
                  <div class="col-sm">
                     <div class="row">
                        <div class="col">
                           <ul>
                              <li><a class="text-light" href="http://">Contato</a></li>
                              <li><a class="text-light" href="http://">FAQ</a></li>
                              <li><a class="text-light" href="http://">Meus Pedidos</a></li>
                              <li><a class="text-light" href="http://">Política de retorno</a></li>
                              <li><a class="text-light" href="http://">Informações de compra</a></li>
                              <li><a class="text-light" href="http://">Privacidade</a></li>
                              <li><a class="text-light" href="http://">Termos de uso</a></li>
                              <li><a class="text-light" href="http://">Permissão de uso</a></li>
                           </ul>
                        </div>
                        <div class="col">
                           <ul>
                              <li><a class="text-light" href="http://">Contato</a></li>
                              <li><a class="text-light" href="http://">FAQ</a></li>
                              <li><a class="text-light" href="http://">Meus Pedidos</a></li>
                              <li><a class="text-light" href="http://">Política de retorno</a></li>
                              <li><a class="text-light" href="http://">Informações de compra</a></li>
                              <li><a class="text-light" href="http://">Privacidade</a></li>
                              <li><a class="text-light" href="http://">Termos de uso</a></li>
                              <li><a class="text-light" href="http://">Permissão de uso</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm">
                           <p>© 2020 Urban Decay Cosmetics. All rights reserved. This site is intended for US consumers. Cookies and related technology are used for advertising. To learn more or opt-out, visit AdChoices and our Privacy Policy.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- Footer end -->
      </div>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

   </body>
</html>
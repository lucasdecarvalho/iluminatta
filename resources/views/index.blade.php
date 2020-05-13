<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Styles -->
      <link href="{{asset('css/app.css')}}" rel="stylesheet">
      <!-- Scripts -->
      <!-- <script src="{{asset('js/app.js')}}" defer></script> -->
      <title>Laravel</title>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      <style>
         #carouselExampleControls {
         width:100%;
         height:auto;
         background:#f90;
         }
         .slide {
         overflow:hidden;
         }
         @media (min-width: 800px)
         {
         #menuItens {
         top:71px;
         }
         }
      </style>
   </head>
   <body>
      <div class="flex-center position-ref full-height">
         <!-- header -->
         <div class="navbar navbar-light bg-warning">
            <span>oioioi</span>
         </div>
         <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-primary d-none d-lg-block">
            <div class="collapse navbar-collapse" id="navbarText">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="#">1.800.784.8722 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Store Locator</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Sign Up for Email Newsletter</a>
                  </li>
               </ul>
               <span class="navbar-text">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="#">USA</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Sign in / Register</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Carrinho</a>
                     </li>
                  </ul>
               </span>
            </div>
         </nav>
         <div class="navbar navbar-light bg-light justify-content-between d-none d-lg-block">
            <form class="form-inline">
               <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
               <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
         </div>
         <div class="navbar sticky-top navbar-expand-lg navbar-dark bg-secondary" id="menuItens">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarText" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
               <div class="navbar-nav">
                  <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                  <a class="nav-item nav-link" href="#">Features</a>
                  <a class="nav-item nav-link" href="#">Pricing</a>
                  <a class="nav-item nav-link disabled" href="#">Disabled</a>
               </div>
            </div>
         </div>
         <!-- header end -->
         <!-- Slider -->
         <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="d-block w-100" src="https://www.urbandecay.com/dw/image/v2/AANG_PRD/on/demandware.static/-/Sites-urbandecay-us-Library/default/dw8a906e04/images/homepage/hero-slider/6Piece_GWP_Set_M1_1674x750.jpg?sw=1680&sh=750&sm=fit&q=70" alt="First slide">
               </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
         <!-- Slide end -->
         <div class="col-sm bg-secondary">
            One of three columns
         </div>
         <!-- Content -->
         <div class="container">
            <div class="card-deck mt-4 mb-4">
               <div class="card">
                  <a href="http://">
                  <img class="card-img-top" src="https://www.urbandecay.com/dw/image/v2/AANG_PRD/on/demandware.static/-/Sites-urbandecay-master-catalog/default/dw064a1845/ProductImages/Sets/2020%20Sets/Urban-Decay-Makeup-Sets-Stay-Naked-All-Nighter-Face-Primer.jpg?sw=250&sh=250&sm=fit&q=70" alt="Card image cap">
                  </a>
                  <div class="card-body">
                     <h5 class="card-title">Card title</h5>
                     <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                     <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
               </div>
               <div class="card">
                  <a href="http://">
                  <img class="card-img-top" src="https://www.urbandecay.com/dw/image/v2/AANG_PRD/on/demandware.static/-/Sites-urbandecay-master-catalog/default/dw064a1845/ProductImages/Sets/2020%20Sets/Urban-Decay-Makeup-Sets-Stay-Naked-All-Nighter-Face-Primer.jpg?sw=250&sh=250&sm=fit&q=70" alt="Card image cap">
                  </a>
                  <div class="card-body">
                     <h5 class="card-title">Card title</h5>
                     <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                     <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
               </div>
               <div class="card">
                  <a href="http://">
                  <img class="card-img-top" src="https://www.urbandecay.com/dw/image/v2/AANG_PRD/on/demandware.static/-/Sites-urbandecay-master-catalog/default/dw064a1845/ProductImages/Sets/2020%20Sets/Urban-Decay-Makeup-Sets-Stay-Naked-All-Nighter-Face-Primer.jpg?sw=250&sh=250&sm=fit&q=70" alt="Card image cap">
                  </a>
                  <div class="card-body">
                     <h5 class="card-title">Card title</h5>
                     <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                     <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
               </div>
            </div>
         </div>
         <!-- Content end -->
         <!-- Slider -->
         <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="d-block w-100" src="https://www.urbandecay.com/dw/image/v2/AANG_PRD/on/demandware.static/-/Sites-urbandecay-us-Library/default/dwd68bad91/images/homepage/M5/Virtual_Bundlesonsite_M1.jpg?sw=1680&sh=750&sm=fit&q=70" alt="First slide">
               </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
         <!-- Slide end -->
         <!-- Content -->
         <div class="container">
            <div class="card-deck mt-4 mb-4">
               <div class="card">
                  <a href="http://">
                  <img class="rounded-circle w-100" src="https://www.urbandecay.com/dw/image/v2/AANG_PRD/on/demandware.static/-/Sites-urbandecay-us-Library/default/dwc92530df/loyalty/loyalty-homepage-slot.jpg?sw=340&sh=340&sm=fit&q=70" alt="Card image cap">
                  </a>
                  <div class="card-body">
                     <h5 class="card-title">Card title</h5>
                     <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                     <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
               </div>
               <div class="card">
                  <a href="http://">
                  <img class="rounded-circle w-100" src="https://www.urbandecay.com/dw/image/v2/AANG_PRD/on/demandware.static/-/Sites-urbandecay-us-Library/default/dwc96c0716/images/homepage/G2/UDAllAccess_G123_110515.jpg?sw=340&sh=340&sm=fit&q=70" alt="Card image cap">
                  </a>
                  <div class="card-body">
                     <h5 class="card-title">Card title</h5>
                     <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                     <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
               </div>
               <div class="card">
                  <a href="http://">
                  <img class="card-img-top" src="https://www.urbandecay.com/dw/image/v2/AANG_PRD/on/demandware.static/-/Sites-urbandecay-master-catalog/default/dw064a1845/ProductImages/Sets/2020%20Sets/Urban-Decay-Makeup-Sets-Stay-Naked-All-Nighter-Face-Primer.jpg?sw=250&sh=250&sm=fit&q=70" alt="Card image cap">
                  </a>
                  <div class="card-body">
                     <h5 class="card-title">Card title</h5>
                     <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                     <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
               </div>
            </div>
         </div>
         <!-- Content end -->
         <!-- Footer -->
         <footer class="bg-secondary">
            <div class="footer-head border-bottom">
               <div class="container p-4">
                  <div class="row">
                     <div class="col-sm">
                        <div class="row">
                           <form class="form-inline mb-3">
                              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Assinar</button>
                           </form>
                        </div>
                        <div class="row">
                           <span>This sign up is for U.S. consumers. By registering, your information will be collected and used in the US subject to our US Privacy Policy and Terms of Use. Non-US consumers should visit the country website serving their region.</span>
                        </div>
                     </div>
                     <div class="col-sm">
                        <div class="row">
                           <p>redes sociais</p>
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
                              <li><a href="http://">Contato</a></li>
                              <li><a href="http://">FAQ</a></li>
                              <li><a href="http://">Meus Pedidos</a></li>
                              <li><a href="http://">Política de retorno</a></li>
                              <li><a href="http://">Informações de compra</a></li>
                              <li><a href="http://">Privacidade</a></li>
                              <li><a href="http://">Termos de uso</a></li>
                              <li><a href="http://">Permissão de uso</a></li>
                           </ul>
                        </div>
                        <div class="col">
                           <ul>
                              <li><a href="http://">Contato</a></li>
                              <li><a href="http://">FAQ</a></li>
                              <li><a href="http://">Meus Pedidos</a></li>
                              <li><a href="http://">Política de retorno</a></li>
                              <li><a href="http://">Informações de compra</a></li>
                              <li><a href="http://">Privacidade</a></li>
                              <li><a href="http://">Termos de uso</a></li>
                              <li><a href="http://">Permissão de uso</a></li>
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
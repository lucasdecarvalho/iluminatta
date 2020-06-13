<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Styles -->
      <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
      <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">

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
         <nav class="navbar sticky-top navbar-expand-md navbar-dark d-none d-md-block pt-0 pb-0" style="background:#2c1b47;border-bottom: solid 1px rgba(157, 111, 174, .3);">
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
         <div class="navbar navbar-light justify-content-between d-none d-md-block p-md-0" style="background:#2c1b47">
            <div class="row">
               <div class="col-4">
                  <!--  -->
               </div>
               <div class="col-md-4 col-12 text-center">
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
         <div class="navbar sticky-top navbar-expand-md navbar-dark pt-0 pb-0 m-0" id="menuItens" style="background:#2c1b47;">
            <div class="row w-100 p-0 m-0 d-md-none d-block">
               <div class="col-9 d-md-none d-block float-left">
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
               <div class="card border-0">
                  <a href="details">
                  <img class="card-img-top" src="https://www.urbandecay.com/dw/image/v2/AANG_PRD/on/demandware.static/-/Sites-urbandecay-master-catalog/default/dw064a1845/ProductImages/Sets/2020%20Sets/Urban-Decay-Makeup-Sets-Stay-Naked-All-Nighter-Face-Primer.jpg?sw=250&sh=250&sm=fit&q=70" alt="Card image cap">
                  </a>
                  <div class="card-body">
                     <h5 class="card-title">Card title</h5>
                     <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                     <p class="card-text">$22</p>
                  </div>
               </div>
               <div class="card border-0">
                  <a href="details">
                  <img class="card-img-top" src="https://www.urbandecay.com/dw/image/v2/AANG_PRD/on/demandware.static/-/Sites-urbandecay-master-catalog/default/dw064a1845/ProductImages/Sets/2020%20Sets/Urban-Decay-Makeup-Sets-Stay-Naked-All-Nighter-Face-Primer.jpg?sw=250&sh=250&sm=fit&q=70" alt="Card image cap">
                  </a>
                  <div class="card-body">
                     <h5 class="card-title">Card title</h5>
                     <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                     <p class="card-text">$39</p>
                  </div>
               </div>
               <div class="card border-0">
                  <a href="details">
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
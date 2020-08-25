<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/details.css') }}" rel="stylesheet" type="text/css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600&Libre+Baskerville:wght@700&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Amita:wght@400&display=swap" rel="stylesheet">
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
            font-family: 'Amita', cursive;
            font-size:32px;
            color:#fff;
            line-height:0;
            margin-top:1.3em;
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

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        input[type="number"] {
            -moz-appearance: textfield;
        }
    </style>
</head>
<body>
    <div class="flex-center position-ref full-height">
        <!-- header -->
        <div class="navbar p-1" style="background:#b08bbe;">
            <span class="w-100 text-center text-light">Indique-nos a uma amiga ou amigo e ganhe 25% de desconto em sua próxima compra. Código: FRIENDS25</span>
            </div>
            <nav class="navbar sticky-top navbar-expand-md navbar-dark d-none d-md-block pt-0 pb-0" style="background:#2c1b47;border-bottom: solid 1px rgba(157, 111, 174, .3);">
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">(19) 1234-5678 <span class="sr-only">(current)</span></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Localidade da Loja</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="../client">Inscreva-se em nossa Newsletter</a>
                    </li>
                </ul>
                <span class="navbar-text p-0">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                        <a class="nav-link" href="#">@if (Auth::check()) {{ "Olá, ". Auth::user()->name }} @endif</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="../client">Login / Registro</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('cart.index') }}">Carrinho</a>
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
                    <a href="/"><h1>Iluminatta</h1><i class="fas fa-seedling" style="position:absolute;margin-left:-0em;margin-top:-2em;font-size:1.2em;color:#ff7700;"></i></a>
                </div>
                <div class="col-4">
                    <form class="form-inline mt-3 float-right w-75">
                        <input class="form-control mr-sm-2 w-100" type="search" placeholder="Buscar" aria-label="Search">
                        <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
                    </form>
                </div>
            </div>
            </div>
            <div class="navbar sticky-top navbar-expand-md navbar-dark pt-0 pb-0 m-0" id="menuItens" style="background:#2c1b47;">
            <div class="row w-100 p-0 m-0 d-md-none d-block">
                <div class="col-9 d-md-none d-block float-left">
                        <a href="/"><h1 class="mt-1">Iluminatta</h1></a>
                </div>
                <div class="col-3 float-right mt-3">
                    <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarText" aria-expanded="true" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <ul class="navbar-nav">
                    <!-- <li><a class="nav-item nav-link active" href="#"><i class="fa fa-bars" aria-hidden="true"></i> SHOP <span class="sr-only">(current)</span></a></li> -->
                    @foreach ($categories as $catg)
                        <li><a class="nav-item nav-link" href="{{ route('shop.index',$catg->path ?? null) }}">{{ $catg->title ?? null }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- header end -->

        @yield('content')
        
        <!-- Footer -->
        <footer class="text-light" style="background:#2c1b47;">
            <div class="footer-head" style="background:#2c1b47;border-bottom: solid 1px rgba(157, 111, 174, .3);">
                <div class="container p-4">
                    <div class="row">
                        <div class="col-sm">
                        <div class="row">
                            <form class="form-inline mb-3 w-100 w-xl-75">
                                <input class="form-control mr-sm-2" type="search" placeholder="Digite seu e-mail" aria-label="Search">
                                <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Assinar</button> -->
                            </form>
                        </div>
                        <div class="row">
                            <span>Inscreva-se em nossa newsletter e receba mensagens periodicamente sobre promoções, novidades e destaques de nossa loja.</span>
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
                        <p>Somos uma loja de produtos importados, com ótimo estoque e custo benefício. Navegue por nossas páginas e encontre os produtos que mais tem a ver com o seu estilo. Temos diversas formas de pagamento e facilidades.</p>
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
                            <p>© 2020 Iluminatta. Todos os direitos reservados.</p>
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

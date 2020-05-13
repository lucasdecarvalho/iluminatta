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
        .container {
            height:1200px;
            background: pink;
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
                        <img class="d-block w-100" src="https://www.larissaminatto.com/skin/frontend/shopper/default/images/_F0A9293.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://www.larissaminatto.com/skin/frontend/shopper/default/images/_F0A9293.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://www.larissaminatto.com/skin/frontend/shopper/default/images/_F0A9293.jpg" alt="Third slide">
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
                <div class="row">
                    <div class="col-sm bg-primary">
                    One of three columns
                    </div>
                    <div class="col-sm bg-success">
                    One of three columns
                    </div>
                    <div class="col-sm bg-warning">
                    One of three columns
                    </div>
                </div>
            </div>
            <!-- Content end -->
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../public/css/mycss.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" href="#"><strong>ONERO</strong> STORE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Smartphone</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Laptop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Headphoe & Speaker</a>
                    </li>
                </ul>
            </div>  
        </nav>
        <br>

        <div class="container mt-3">
            <div id="myCarousel" class="carousel slide">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li class="item1 active"></li>
                <li class="item2"></li>
                <li class="item3"></li>
            </ul>
            
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="../images/laptop.jpg" alt="Los Angeles" width="1100" height="500">
                </div>
                <div class="carousel-item">
                <img src="../images/iphone.jpg" alt="Chicago" width="1100" height="500">
                </div>
                <div class="carousel-item">
                <img src="../images/speaker.jpg" alt="New York" width="1100" height="500">
                </div>
            </div>
            
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#myCarousel">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#myCarousel">
                <span class="carousel-control-next-icon"></span>
            </a>
            </div>
        </div>
        
        <br />
        <br />
        <div class="container">
            <h4>Produk Terbaru</h4>
            <div class="row">
            @foreach($home as $p)
                <div class="col-sm-2 col-md-2 ">
                    <div class="card" style="width:150px">
                        <img class="card-img-top" src="../images/samsungS10.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h5 class="card-title">{{ $p->nama }}</h5>
                            <h6 class="card-title">Rp. {{ $p->harga }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>

        <br />
        <br />

        <div class="container">
            <h4>Produk Rekomendasi</h4>
            <div class="row">
            @foreach($star as $p)
                <div class="col-sm-2 col-md-2 ">
                    <div class="card" style="width:150px">
                        <img class="card-img-top" src="../images/samsungS10.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h5 class="card-title">{{ $p->nama }}</h5>
                            <h6 class="card-title">Rp. {{ $p->harga }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>

<script>
$(document).ready(function(){
  // Activate Carousel
  $("#myCarousel").carousel();
    
  // Enable Carousel Indicators
  $(".item1").click(function(){
    $("#myCarousel").carousel(0);
  });
  $(".item2").click(function(){
    $("#myCarousel").carousel(1);
  });
  $(".item3").click(function(){
    $("#myCarousel").carousel(2);
  });
    
  // Enable Carousel Controls
  $(".carousel-control-prev").click(function(){
    $("#myCarousel").carousel("prev");
  });
  $(".carousel-control-next").click(function(){
    $("#myCarousel").carousel("next");
  });
});
</script>
    </body>
</html>

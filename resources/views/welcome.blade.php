<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
            .carousel-inner img {
    width: 100%;
    height: 20%;
    align-items: center;}

    .container {
  position: relative;
}

/* Bottom right text */
.text-block {
    height: 100px;
    height: 100px;
  position: absolute;
  bottom: 150px;
  right: 150px;
  background-color: rgb(27, 26, 26);
  color: white;
  padding-left: 40px;
  padding-right: 140px;
}
        </style>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">

            <a class="navbar-brand mr-5 " href="#">Aseel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
              <ul class="navbar-nav mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link " href="/">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="/contactus">Contact us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="/about" >About us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/services">Services</a>
                </li>
              </ul>
            </div>

            </div>
          </nav>
          
          <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            
            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <h1>I love laravel</h1>
                <div class="container">
                    <img src="https://cdn.pixabay.com/photo/2014/04/14/20/11/flowers-324175_1280.jpg" alt="Norway" style="width:100%;">
                    <div class="text-block">
                      <h4>Nature</h4>
                      <p>What a beautiful sunrise</p>
                    </div>
                  </div>
                <img src=" alt="Los Angeles" width="1100" height="300">
          
            </div>
              <div class="carousel-item">
                <img src="" alt="Chicago" width="1100" height="300">
              </div>
              <div class="carousel-item">
                <img src="ny.jpg" alt="New York" width="1100" height="500">
              </div>
            </div>
            
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                {{-- <div class="links">
                    <a href="/">Home</a>
                    <a href="/about">about</a>
                    <a href="/contact">contact</a>
                    <a href="/services">services</a>
              
                </div> --}}
            </div>
        </div>
    </body>
</html>

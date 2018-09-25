<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Administrador Clientes</title>
        <link rel="shortcut icon" href="img/favicon.png" />

        <!-- Fonts  css-->
        <!--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">-->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/cover.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">Administrador de Clientes</h3>
          <nav class="nav nav-masthead justify-content-center">            
            <a class="nav-link" href="/login">Login</a>
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">


        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/banner_01.jpg" alt="First slide" width="100px" height="100%">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/banner_02.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/banner_03.png" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </main>


      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p></p>
        </div>
      </footer>
    </div>

    <!--scripts -->
    <script src="js/jquery-3.3.1.min.js"></script>       
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
    </body>
</html>

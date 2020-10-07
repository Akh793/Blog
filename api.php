<!doctype html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
    <link rel="stylesheet" href="./style/api.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="script.js"></script>
</head>

<body>

    <!------------------------------------- Navbar-------------------------------->
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top py-3">
            <div class="container"><a class="navbar-brand text-uppercase font-weight-bold">&nbsp&nbsp&nbspWeather API avec OpenWeatherMap</a>
                <button type="button" style="background-color: #3bb78f" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="homepage.php" class="nav-link text-uppercase font-weight-bold"> <i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a></li>
                        <li class="nav-item"><a href="publication.php" class="nav-link text-uppercase font-weight-bold"><i class="fas fa-newspaper"></i> Articles</a></li>
                        <li class="nav-item"><a href="projets.php" class="nav-link text-uppercase font-weight-bold"><i class="fas fa-construction"></i> Projets</a></li>
                        <li class="nav-item"><a href="about.php" class="nav-link text-uppercase font-weight-bold"><i class="fas fa-address-card"></i> A propos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
<div class="content">
    <div class="cat">

      <div class="ears">
        <span></span>
        <span></span>
      </div>

      <div class="eyes">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>

      <div class="nose">
        <span></span>
        <span></span>
      </div>

      <div class="mouth">3</div>

      <div class="paws">
        <span></span>
        <span></span>
      </div>

      <div class="tail"></div>

    </div>

    <div class="wall">
    <form method="GET" action="app-meteo-get.php">
        
                <input class="form-control" type="text" placeholder=" Quelle ville recherchez vous ?" name="ville" aria-label="Search">
    </div>

</div>



    <a class="gotopbtn" href="#"><i class="fas fa-arrow-circle-up" style="color : bluelight"></i></i></a>
    <a class="gotopbtn1" href="projets.php"><i class="fas fa-arrow-circle-left" style="color : bluelight"></i></i></a>

    <!------------------------------------- FOOTER-------------------------------->

</body>
</html>
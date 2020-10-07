<!doctype html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
    <link rel="stylesheet" href="./style/style-projets.css">

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
            <div class="container"><a class="navbar-brand text-uppercase font-weight-bold"><i class="fas fa-construction"></i> Projets</a></a>
                <button type="button" style="background-color: #008000" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

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
    <br>
    <br>

    <div class="blog-post">
        <div class="blog-post-img">
            <img src="./images/api.jpg" alt="">
        </div>
        <div class="blog-post-info">
            <div class="blog-post-title">
                <h2>OpenWeatherMap</h2>
            </div>
            <div class="blog-post-desc">
                <p>Une API (Application Programming Interface ou interface de programmation) est un ensemble de services offert par un logiciel à d'autres logiciels. Grâce aux API, les programmes informatiques peuvent interagir entre eux selon des conditions déterminées.</p>
            </div>
            <div class="blog-post-read-more">
                <a href="api.php">Read More</a>
            </div>
        </div>
    </div>

    <div class="blog-post">
        <div class="blog-post-img">
            <img src="" alt="">
        </div>
        <div class="blog-post-info">
            <div class="blog-post-title">
                <h2>A venir</h2>
            </div>
            <div class="blog-post-date">
                <span></span>
                <span></span>
            </div>
            <div class="blog-post-desc">
                <p></p>
            </div>
            <div class="blog-post-read-more">
                <a href="#">Read More</a>
            </div>
        </div>
    </div>

    
    <div class="blog-post">
        <div class="blog-post-img">
            <img src="" alt="">
        </div>
        <div class="blog-post-info">
            <div class="blog-post-title">
                <h2>A venir</h2>
            </div>
            <div class="blog-post-date">
                <span></span>
                <span></span>
            </div>
            <div class="blog-post-desc">
                <p></p>
            </div>
            <div class="blog-post-read-more">
                <a href="#">Read More</a>
            </div>
        </div>
    </div>

    <a class="gotopbtn" href="#"><i class="fas fa-arrow-circle-up" style="color : #008000"></i></i></a>
    <a class="gotopbtn1" href="homepage.php"><i class="fas fa-arrow-circle-left" style="color :#008000 "></i></i></a>





    <!------------------------------------- FOOTER-------------------------------->



</body>

</html>
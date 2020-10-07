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
    <br>
    <br>

    <!------------------------------------- Navbar --------------------------------------->
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top py-3">
            <div class="container"><a class="navbar-brand text-uppercase font-weight-bold">&nbsp&nbsp&nbspWeather API avec OpenWeatherMap</a>
                <button type="button" style="background-color:  rgb(34, 193, 195)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

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
    <!------------------------------------- Navbar ENDS-------------------------------->

    <!------------------------------------- API PHP------------------------------------>

    <?php



    $ville = $_GET['ville'];
    $api = "http://api.openweathermap.org/data/2.5/weather?q=" . $ville . "&units=metric&appid=ebcf5230b3446f334fe3fa2fd2d4ce24&lang=fr";
    $data = json_decode(file_get_contents($api), true);


    $temp = $data['main']['temp'];
    $icon = $data['weather'][0]['icon'];
    $country = $data['name'] . "," . $data['sys']['country'] . "</h1></b>";

    $logo = "<img src='http://openweathermap.org/img/w/" . $icon . ".png'>";
    $description = "<b><p>" . $data['weather'][0]['description'] . "</p></b>";

    $temperature =   $temp . " °C";
    $clouds =  $data['clouds']['all'] . " %";
    $humidity = $data['main']['humidity'] . " %";
    $windspeed = "Wind Speed :" . $data['wind']['speed'] . " m/s";
    $pressure = "Pressure :" . $data['main']['pressure'] . " hpa";
    $sunrise = "Lever :" . date(' h:i A', $data['sys']['sunrise']);
    $sunset = "Coucher :" . date(' h:i A', $data['sys']['sunset']);

    ?>

    <br>
    <br>
    <br>
    <br>



<center>
    <div class="card w-75">
        <div class="card-body">
            <h1 class="card-title"><?php echo $country ?></h1>
            <p class="card-text">
                <p class="card-text">
                    <span class="badge">
                        <h4><?php echo $description;
                            ?></h4>
                    </span>


                    <h1><?php echo $logo;
                        ?></h1>


                    <!------------------------------------- API PHP END------------------------------------>

                    <!------------------------------------- API Rendu visuel Html------------------------------------>


                    <h4>
                        <table>
                            <tr>
                                <td>
                                    <i class="fas fa-temperature-high"></i>
                                    <?php echo $temperature;
                                    ?></td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fas fa-clouds"></i>
                                    <?php echo $clouds;
                                    ?></td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fas fa-humidity"></i>
                                    <?php echo $humidity;
                                    ?></td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="far fa-sunrise"></i>
                                    <?php echo $sunrise;
                                    ?></td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="far fa-sunset"></i>
                                    <?php echo $sunset;
                                    ?></td>
                            </tr>
                        </table>
                    </h4>
                </p>

        </div>
    </div>
                </center>














    <!------------------------------------- API Rendu visuel Html END------------------------------------>



    <a class="gotopbtn" href="#"><i class="fas fa-arrow-circle-up" style="color : bluelight"></i></i></a>
    <a class="gotopbtn1" href="api.php"><i class="fas fa-arrow-circle-left" style="color : bluelight"></i></i></a>


    <!------------------------------------- FOOTER-------------------------------->



</body>

</html>
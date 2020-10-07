<!doctype html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
    <link rel="stylesheet" href="./style/style.css">

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

    <!------------------------------------- Navbar-------------------------------->
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top py-3">
            <div class="container"><a class="navbar-brand text-uppercase font-weight-bold"><i class="fas fa-home"></i> Home</a>
                <button type="button" style="background-color: #008CBA" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

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

    <div class="container">
        <div class="pt-5 text-white">

            <div class="py-5">
                <p class="lead">Lorem ipsum dolor sit amet, <strong class="font-weight-bold">consectetur adipisicing </strong>elit. Explicabo consectetur odio voluptatum facere animi temporibus, distinctio tempore enim corporis quam <strong class="font-weight-bold">recusandae </strong>placeat! Voluptatum voluptate, ex modi illum quas nam distinctio.</p>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <br>
            <br>
            <div class="image">
                <center><img src=".\images\david1.png" class="img-fluid" alt="Responsive image"></center>
            </div>
            <br>
            <br>
            <div class="py-5">
                <p class="lead">David ipsum dolor sit amet, <strong class="font-weight-bold">consectetur adipisicing </strong>elit. Explicabo consectetur odio voluptatum facere animi temporibus, distinctio tempore enim corporis quam <strong class="font-weight-bold">recusandae </strong>placeat! Voluptatum voluptate, ex modi illum quas nam distinctio.</p>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>


    <!------------------------------------- CARD-------------------------------->

    <div class="blog-card">
        <div class="meta">
            <div class="photo" style="background-image: url(./images/57835.jpg)"></div>
            <ul class="details">
                <li class="tags">
                    <ul>
                        <li><a href="#">Learn</a></li>
                        <li><a href="#">Code</a></li>
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">CSS</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="description">
            <h1><a href="publication.php">Publications</a></h1>
            <h2>Articles en lien avec le développement ou le trading.</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
            <p class="read-more">
                <a href="publication.php">Go</a>
            </p>
        </div>
    </div>
    <div class="blog-card alt">
        <div class="meta">
            <div class="photo" style="background-image: url(./images/658.jpg)"></div>
            <ul class="details">
                <li class="tags">
                    <ul>
                        <li><a href="#">Learn</a></li>
                        <li><a href="#">Code</a></li>
                        <li><a href="#">JavaScript</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="description">
        <h1><a href="projets.php">Mes Projets</a></h1>
            <h2>Ce que je développe en ce moment</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
            <p class="read-more">
                <a href="projets.php">Go</a>
            </p>
        </div>
    </div>
    </div>
    </div>

    <div class="blog-card">
        <div class="meta">
            <div class="photo" style="background-image: url(./images/999.png)"></div>
            <ul class="details">
                <li class="tags">
                    <ul>
                        <li><a href="#">Learn</a></li>
                        <li><a href="#">Code</a></li>
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">CSS</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="description">
        <h1><a href="about.php">A propos de moi</a></h1>
            <h2>Skills, Expériences & Passions</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
            <p class="read-more">
                <a href="about.php">Go</a>
            </p>
        </div>
    </div>
    <div class="container">
        <div class="pt-5 text-white">
            <div class="py-5">
                <p class="lead">Lorem ipsum dolor sit amet, <strong class="font-weight-bold">consectetur adipisicing </strong>elit. Explicabo consectetur odio voluptatum facere animi temporibus, distinctio tempore enim corporis quam <strong class="font-weight-bold">recusandae </strong>placeat! Voluptatum voluptate, ex modi illum quas nam distinctio.</p>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>



    <a class="gotopbtn" href="#"><i class="fas fa-arrow-circle-up" style="color : bluelight"></i></i></a>




    <!------------------------------------- FOOTER-------------------------------->
    <footer>
        <div class="mt-5 pt-5 pb-5 footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-xs-12 about-company">
                        <h2>Heading</h2>
                        <p class="pr-5 text-white-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac ante mollis quam tristique convallis </p>
                    </div>
                    <div class="col-lg-3 col-xs-12 links">
                        <h4 class="mt-lg-0 mt-sm-3">Liens</h4>
                        <ul class="m-0 p-0">
                            <li> <a href="homepage.php"><u>Home</u></a></li>
                            <li> <a href="publication.php"><u>Article</u></a></li>
                            <li> <a href="projets.php"><u>Mes projets</u></a></li>
                            <li> <a href="about.php"><u>A propos de moi</u></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-xs-12 location">
                        <h4 class="mt-lg-0 mt-sm-4">Localisation</h4>
                        <p>&nbsp &nbsp &nbspLyon 69007</p>
                        <p class="mb-0"><i class="fa fa-phone mr-3"></i>06 41 10 45 53</p>
 
                        <p><i class="far fa-envelope"></i></i></i><a href="mailto:rival.david@hotmail.fr">  &nbsp&nbsprival.david@hotmail.fr</a></p>
                    </div>
                </div>

                <div class="w-full sm:w-1/2 md:w-1/3 flex flex-col p-3">
                    <div class="bg- rounded-lg shadow-lg overflow-hidden flex-1 flex flex-col">
                        <div class="p-4 flex-1 flex flex-col" >
                                    <center><h3>Rejoignez moi sur <i href="https://twitter.com/Akh793" class="fab fa-twitter"></i></h3></center>     
                            </div>
                        </div>
                    </div>

                    <div class=" row mt-5">
                            <div class="col copyright">
                                <p class=""><small class="text-white-50">© 2019. All Rights Reserved. <a href="https://fr.freepik.com/vecteurs/design">Design vecteur créé par studiogstock - fr.freepik.com</a> </small></p>
                            </div>
                        </div>
                    </div>
                </div>
    </footer>


</body>

</html>
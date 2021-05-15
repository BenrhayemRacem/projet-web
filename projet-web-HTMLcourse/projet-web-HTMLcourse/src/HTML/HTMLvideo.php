<?php

?>

<!DOCTYPE html>
<html lang="en">
<head style="border-left-width: 0  ; border-left-style: solid;">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../../Assets/Logohead.png">


    <link rel="stylesheet" href="../../Assets/styling/bootstrapJournal.css">

    <title> HTML media </title>
</head>


<body>

<div class="container-fluid">
    <header>


        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor03">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home
                                <span class="visually-hidden">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

    </header>
</div>
<div class="container">
<div class="progress">
    <div class="progress-bar progress-bar-striped " role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
<div class="container ">
    <div class="row  justify-content-between">
        <div class="col-2">
            <div class="list-group">
                <a href="HTMLhistory.php" class="list-group-item list-group-item-action ">HTML History</a>
                <a href="HTMLbalises.php" class="list-group-item list-group-item-action ">HTML balises</a>
                <a href="HTMLtableaux.php" class="list-group-item list-group-item-action  ">HTML tableaux</a>

                <a href="HTMLinput.php" class="list-group-item list-group-item-action  ">HTML input</a>
                <a href="HTMLtypesinput.php" class="list-group-item list-group-item-action  ">HTML types input</a>
                <a href="HTMLorganisation.php" class="list-group-item list-group-item-action  ">HTML organisation</a>
                <a href="HTMLvideo.php" class="list-group-item list-group-item-action  active">HTML media</a>
                <a href="HTMLquiz.php" class="list-group-item list-group-item-action ">HTML quiz</a>

            </div>




        </div>
        <div class="col-8">
<div id="page">

    <div class="main">
        <div class="jumbotron">
            <h1 class="display-3">Media</h1>
            <hr class="my-4">

            <p>
                -image <br>
                -video<br>
                -audio<br>
            </p>
            <h2> les attributs de ces balises </h2>
            <p>
                - controls : pour ajouter les boutons « Lecture », « Pause »
                et la barre de défilement <br>
                -Width<br>
                -Height<br>
                -loop : jouer en boucle<br>
                -autoplay : la musique sera jouée dès le chargement de la page<br>
                -Preload :on ne peut pas le forcer, ça dépend du nav<br>

            </p>


            </div>

        </div>
    </div>

            <div class="container justify-items-end">
                <a class="boutton" href="pageHome.php">
                    <button type="button" class="btn btn-primary"> Home</button>
                </a>
                <a class="boutton" href="HTMLorganisation.php">
                    <button type="button" class="btn btn-primary"> < Previous</button>
                </a>
                <a class="boutton" href="HTMLquiz.php">
                    <button type="button" class="btn btn-primary">Next ></button>
                </a>
            </div>

</div>
</div>




</body>
</html>
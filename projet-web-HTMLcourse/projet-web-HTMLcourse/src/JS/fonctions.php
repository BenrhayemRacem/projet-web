<?php
?>

<!DOCTYPE html>
<html lang="en">
<head style="border-left-width: 0  ; border-left-style: solid;">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../../Assets/Logohead.png">


    <link rel="stylesheet" href="../../Assets/styling/bootstrapJournal.css">
    <title> JS fonctions</title>
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
        <div class="progress-bar  progress-bar-animated progress-bar-striped " role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
</div>

<div class="container ">
    <div class="row  justify-content-between">
        <div class="col-2">
            <div class="list-group">
                <a href="history.php" class="list-group-item list-group-item-action ">JS History</a>
                <a href="introduction.php" class="list-group-item list-group-item-action">introduction </a>
                <a href="identifiants.php" class="list-group-item list-group-item-action ">Les identifiants</a>

                <a href="date.php" class="list-group-item list-group-item-action ">Dates et Times</a>
                <a href="chaines.php" class="list-group-item list-group-item-action ">Les chaines</a>
                <a href="booleen.php" class="list-group-item list-group-item-action ">Les booleens</a>
                <a href="variable.php" class="list-group-item list-group-item-action ">Les varialbes</a>
                <a href="tableaux.php" class="list-group-item list-group-item-action ">les tableaux</a>
                <a href="objets.php" class="list-group-item list-group-item-action ">Les objets</a>
                <a href="fonctions.php" class="list-group-item list-group-item-action active">Les fonctions</a>
                <a href="dom.php" class="list-group-item list-group-item-action ">Le DOM</a>
                <a href="quizz.php" class="list-group-item list-group-item-action ">JS quiz</a>

            </div>
        </div>




        <div class="col-8">
            <div id="page">

                <div class="main">
                    <div class="jumbotron">
                        <h1 class="display-3">Les fonctions </h1>
                        <hr class="my-4">

                        <p>  C’est un objet « spécial »,Vous pouvez lui ajouter des propriétés et invoquer des méthodes
                        </p>
                        <p>C’est un bloc JS défini une fois mais qui peut être exécuté à volonté.</p>
                        <p> Paramétrable : </p>
                        <ul>
                            <li> Inclut un ensemble d’identifiant, paramètres travaillant comme des
                                variables locales.</li>
                            <li>L’invocation de la fonction nécessite de lui passer les arguments</li>
                        </ul>

                        <p>Peut retourner une valeur   </p>
                        <p> TPossède un contexte d’invocation: le mot cle this  </p>
                        <p>Peut être assigné à la propriété d’un objet qui devient une méthode   </p>
                        <p>Quand une fonction est invoqué à travers un objet, cet objet devient son
                            contexte d’invocation   </p>
                        <p>Peut être utilisé pour initialiser un objet. C’est le constructeur de l’objet.   </p>
                        <p> Une fonction est déclaré en utilisant le mot clé
                            function </p>
                        <p> Une fonction littérale est déclarée
                            var carre=function(x){return x*x;}</p>



                    </div>
                </div>
            </div>

            <div class="container justify-items-end">
                <a class="boutton" href="pageHome.php">
                    <button type="button" class="btn btn-primary"> Home </button>
                </a>
                <a class="boutton" href="objets.php">
                    <button type="button" class="btn btn-primary"> < Previous </button>
                </a>
                <a class="boutton" href="dom.php">
                    <button type="button" class="btn btn-primary">Next ></button>
                </a>
            </div>

        </div>
    </div>




</body>
</html>
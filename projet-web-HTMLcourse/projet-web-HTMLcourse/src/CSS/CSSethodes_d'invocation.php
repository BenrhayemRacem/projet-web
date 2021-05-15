<?php
?>

<!DOCTYPE html>
<html lang="en">
<head style="border-left-width: 0  ; border-left-style: solid;">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../../Assets/Logohead.png">


    <link rel="stylesheet" href="../../Assets/styling/bootstrapJournal.css">

    <title> CSS methodes d'invocation </title>
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
        <div class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar" style="width: 20%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
</div>
<div class="container ">
    <div class="row  justify-content-between">
        <div class="col-2">




            <div class="list-group">
                <a href="CSSsyntaxe.php" class="list-group-item list-group-item-action ">CSS syntaxe</a>
                <a href="CSSethodes_d'invocation.php" class="list-group-item list-group-item-action active">les methodes d'invocation</a>
                <a href="CSStexte.php" class="list-group-item list-group-item-action ">Css texte</a>

                <a href="CSScolor.php" class="list-group-item list-group-item-action ">CSS coleur et bordeur</a>
                <a href="CSSselecteurs.php" class="list-group-item list-group-item-action ">les selecteurs principaux</a>
                <a href="CSSLes%20sélecteurs%20descendants.php" class="list-group-item list-group-item-action ">les selecteurs speciaux</a>
                <a href="CSSclass.php" class="list-group-item list-group-item-action ">les classes</a>
                <a href="CSSdivetspan.php" class="list-group-item list-group-item-action ">CSS div et span</a>
                <a href="CSSpseudoclasses.php" class="list-group-item list-group-item-action ">les pseudo classes</a>
                <a href="CSStableaux.php" class="list-group-item list-group-item-action "> les tableaux</a>
                <a href="CSSquiz.php" class="list-group-item list-group-item-action "> CSS quiz </a>



            </div>




        </div>

        <div class="col-8  ">

            <div class="jumbotron " >
                <h1 class="display-3">CSS methodes d'invocation</h1>
                <hr class="my-4">

                <h2>titre</h2>
                <p> On peut introduire un code en langage CSS de
                    3 façons :  </p>

                <ul>
                    <li> Dans un fichier CSS avec la balise < link rel ="stylesheet" href ="style.css" /></li>
                    <li> Dans l’en-tête du fichier HTML (< head >) ; </li>
                    <li> Directement dans les balises via l’attribut style comme < p  style="color:red;">Je ne suis pas recommandé< /p></li>
                </ul>



            </div>



            <div class="container justify-items-end">
                <a class="boutton" href="pageHome.php">
                    <button type="button" class="btn btn-primary"> Home </button>
                </a>
                <a class="boutton" href="CSSsyntaxe.php">
                    <button type="button" class="btn btn-primary"> < Previous </button>
                </a>
                <a class="boutton" href="CSStexte.php">
                    <button type="button" class="btn btn-primary">Next ></button>
                </a>
            </div>

        </div>



    </div>

</div>









</body>
</html>
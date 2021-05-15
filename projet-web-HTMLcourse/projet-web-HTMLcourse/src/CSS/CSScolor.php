<?php
?>

<!DOCTYPE html>
<html lang="en">
<head style="border-left-width: 0  ; border-left-style: solid;">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../../Assets/Logohead.png">


    <link rel="stylesheet" href="../../Assets/styling/bootstrapJournal.css">

    <title> CSS color </title>
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
        <div class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar" style="width: 40%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
</div>
<div class="container ">
    <div class="row  justify-content-between">
        <div class="col-2">



            <div class="list-group">
                <a href="CSSsyntaxe.php" class="list-group-item list-group-item-action ">CSS syntaxe</a>
                <a href="CSSethodes_d'invocation.php" class="list-group-item list-group-item-action">les methodes d'invocation</a>
                <a href="CSStexte.php" class="list-group-item list-group-item-action ">Css texte</a>

                <a href="CSScolor.php" class="list-group-item list-group-item-action active">CSS coleur et bordeur</a>
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
                <h1 class="display-3">CSS attribues</h1>
                <hr class="my-4">

                <h2>les attributs des coleurs</h2>

                <p>
                    Color : définit la couleur du texte par exemple en hexadécimal
                    background-color : définit la couleur de l'arrière-plan
                    background-image : définit l'image de l'arrière-plan URL de l'image
                </p>

                <h2>les attributs des bourdures </h2>

                <p>
                    Border peut utiliser jusqu’à 3 valeurs pour modifier l’apparence
                    de la bordure :
                </p>
                   <ul>
                        <li> La largeur : en pixels (comme 2px)</li>
                        <li> La couleur : nom de couleur (black, red,…), soit une valeur
                            hexadécimale (#FF0000), soit une valeur RGB
                            (rgb(198, 212, 37)).</li>
                        <li>Le type de bordure : (none | solid| dotted|double…..)
                        </li>
                   </ul>
                <p>
                    Exemple :
                    h1 { border: 3px blue dashed; }
                </p>
                <p> on peut specifier les quatres cotes</p>
                <li> border-top : bordure du haut ;</li>
                <li> border-bottom : bordure du bas ;</li>
                <li>border-left : bordure de gauche ;</li>
                <li> border-right : bordure de droite.</li>
                <p>
                    Exemple :
                    p { border-left: 2px solid black;
                    border-right: 2px solid black; }
                </p>



            </div>



            <div class="container justify-items-end">
                <a class="boutton" href="pageHome.php">
                    <button type="button" class="btn btn-primary"> Home </button>
                </a>
                <a class="boutton" href="CSStexte.php">
                    <button type="button" class="btn btn-primary"> < Previous </button>
                </a>
                <a class="boutton" href="CSSselecteurs.php">
                    <button type="button" class="btn btn-primary">Next ></button>
                </a>
            </div>

        </div>



    </div>

</div>









</body>
</html>
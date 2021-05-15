<?php

?>

<!DOCTYPE html>
<html lang="en">
<head style="border-left-width: 0  ; border-left-style: solid;">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../../Assets/Logohead.png">


    <link rel="stylesheet" href="../../Assets/styling/bootstrapJournal.css">
    <title> CSS quizz </title>
</head>

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
    <div class="row  justify-content-between">
        <div class="col-2">

            <div class="list-group">
                <a href="CSSsyntaxe.php" class="list-group-item list-group-item-action ">CSS syntaxe</a>
                <a href="CSSethodes_d'invocation.php" class="list-group-item list-group-item-action">les methodes d'invocation</a>
                <a href="CSStexte.php" class="list-group-item list-group-item-action ">Css texte</a>

                <a href="CSScolor.php" class="list-group-item list-group-item-action ">CSS coleur et bordeur</a>
                <a href="CSSselecteurs.php" class="list-group-item list-group-item-action ">les selecteurs principaux</a>
                <a href="CSSLes%20sélecteurs%20descendants.php" class="list-group-item list-group-item-action ">les selecteurs speciaux</a>
                <a href="CSSclass.php" class="list-group-item list-group-item-action ">les classes</a>
                <a href="CSSdivetspan.php" class="list-group-item list-group-item-action ">CSS div et span</a>
                <a href="CSSpseudoclasses.php" class="list-group-item list-group-item-action ">les pseudo classes</a>
                <a href="CSStableaux.php" class="list-group-item list-group-item-action "> les tableaux</a>
                <a href="CSSquiz.php" class="list-group-item list-group-item-action active"> CSS quiz </a>


            </div>




        </div>
        <div class="col-8">



            <form action="calculScoreQuizzCSS.php">

                    <legend>CSS QUIZ</legend>

                    <fieldset class="form-group">
                        <legend class="mt-4">Quelle methode ne permet pas d'introduire un code en langage CSS </legend>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="question1" id="optionsRadios1" value="option1" >
                                Directement dans les balises via l’attribut style
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="question1" id="optionsRadios2" value="option2">
                                Dans un fichier CSS avec la balise  link
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="question1" id="optionsRadios3" value="option3" >
                                Dans un fichier CSS avec la balise script
                            </label>
                        </div>
                    </fieldset>


                <fieldset class="form-group">
                    <legend class="mt-4">A >B correspond a </legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question2" id="optionsRadios1" value="option1" >
                            une balise contenue dans une autre
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question2" id="optionsRadios2" value="option2">
                            une balise enfant direct de l’autre
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question2" id="optionsRadios3" value="option3" >
                            une première balise B qui suit A
                        </label>
                    </div>
                </fieldset>



                <fieldset class="form-group">
                    <legend class="mt-4">une première balise B qui suit A est represente par </legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question3" id="optionsRadios1" value="option1" >
                            A[B]
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question3" id="optionsRadios2" value="option2">
                            A B
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question3" id="optionsRadios3" value="option3" >
                              A+B
                        </label>
                    </div>
                </fieldset>




                <fieldset class="form-group">
                    <legend class="mt-4"> le selecteur du l'identifiant numero du paragraphe p est  </legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question4" id="optionsRadios1" value="option1" >
                            p#numero
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question4" id="optionsRadios2" value="option2">
                            p.numero
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question4" id="optionsRadios3" value="option3" >
                            p:numero
                        </label>
                    </div>
                </fieldset>



                <fieldset class="form-group">
                    <legend class="mt-4">lien affecte au survol est </legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question5" id="optionsRadios1" value="option1" >
                            A:active
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question5" id="optionsRadios2" value="option2">
                            A:hover
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question5" id="optionsRadios3" value="option3" >
                            A:visited
                        </label>
                    </div>
                </fieldset>

                <button type="submit" class="btn btn-primary">Submit</button>
                <br>
                <br>

            </form>





            <div class="container justify-items-end">
                <a class="boutton" href="pageHome.php">
                    <button type="button" class="btn btn-primary"> Home</button>
                </a>
                <a class="boutton" href="CSStableaux.php">
                    <button type="button" class="btn btn-primary"> < Previous</button>
                </a>

            </div>

</div>
</div>




</body>
</html>
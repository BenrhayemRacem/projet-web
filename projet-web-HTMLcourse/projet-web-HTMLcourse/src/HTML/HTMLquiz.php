<?php

?>

<!DOCTYPE html>
<html lang="en">
<head style="border-left-width: 0  ; border-left-style: solid;">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../../Assets/Logohead.png">


    <link rel="stylesheet" href="../../Assets/styling/bootstrapJournal.css">

    <title> HTML quizz </title>
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
                <a href="HTMLhistory.php" class="list-group-item list-group-item-action ">HTML History</a>
                <a href="HTMLbalises.php" class="list-group-item list-group-item-action ">HTML balises</a>
                <a href="HTMLtableaux.php" class="list-group-item list-group-item-action  ">HTML tableaux</a>

                <a href="HTMLinput.php" class="list-group-item list-group-item-action  ">HTML input</a>
                <a href="HTMLtypesinput.php" class="list-group-item list-group-item-action  ">HTML types input</a>
                <a href="HTMLorganisation.php" class="list-group-item list-group-item-action  ">HTML organisation</a>
                <a href="HTMLvideo.php" class="list-group-item list-group-item-action  ">HTML media</a>
                <a href="HTMLquiz.php" class="list-group-item list-group-item-action active">HTML quiz</a>

            </div>




        </div>
        <div class="col-8">





            <form action="calculScoreQuizzCoursHTML.php">

                    <legend>HTML QUIZ</legend>

                    <fieldset class="form-group">
                        <legend class="mt-4">Pour définir un titre DANS une page HTML, on utilise...</legend>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="question1" id="optionsRadios1" value="option1" >
                                La balise title
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="question1" id="optionsRadios2" value="option2">
                                  La balise head
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="question1" id="optionsRadios3" value="option3" >
                                une des balise h1,h2,h3
                            </label>
                        </div>
                    </fieldset>


                <fieldset class="form-group">
                    <legend class="mt-4">Laquelle de ces syntaxes est correcte pour écrire un commentaire en HTML ?</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question2" id="optionsRadios1" value="option1" >
                            < !--Commentaire-->
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question2" id="optionsRadios2" value="option2">
                            <--Commentaire-->
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question2" id="optionsRadios3" value="option3" >
                            < !--Commentaire--!>
                        </label>
                    </div>
                </fieldset>



                <fieldset class="form-group">
                    <legend class="mt-4">quel type d'input n'existe pas </legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question3" id="optionsRadios1" value="option1" >
                            url
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question3" id="optionsRadios2" value="option2">
                            email
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question3" id="optionsRadios3" value="option3" >
                              phone
                        </label>
                    </div>
                </fieldset>




                <fieldset class="form-group">
                    <legend class="mt-4"> quelle est la balise qui indique le debut d'un tableau </legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question4" id="optionsRadios1" value="option1" >
                            La balise td
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question4" id="optionsRadios2" value="option2">
                            La balise table
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question4" id="optionsRadios3" value="option3" >
                            la balise head
                        </label>
                    </div>
                </fieldset>



                <fieldset class="form-group">
                    <legend class="mt-4">quels sont les types des balises ?</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question5" id="optionsRadios1" value="option1" >
                            block et colonne
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question5" id="optionsRadios2" value="option2">
                            inline et colonne
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question5" id="optionsRadios3" value="option3" >
                            block et inline
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
                <a class="boutton" href="HTMLvideo.php">
                    <button type="button" class="btn btn-primary"> < Previous</button>
                </a>

            </div>

</div>
</div>




</body>
</html>
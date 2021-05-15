<?php

?>

<!DOCTYPE html>
<html lang="en">
<head style="border-left-width: 0  ; border-left-style: solid;">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../../Assets/Logohead.png">


    <link rel="stylesheet" href="../../Assets/styling/bootstrapJournal.css">

    <title> JS quizz </title>
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
                <a href="history.php" class="list-group-item list-group-item-action ">JS History</a>
                <a href="introduction.php" class="list-group-item list-group-item-action">introduction </a>
                <a href="identifiants.php" class="list-group-item list-group-item-action ">Les identifiants</a>

                <a href="date.php" class="list-group-item list-group-item-action ">Dates et Times</a>
                <a href="chaines.php" class="list-group-item list-group-item-action ">Les chaines</a>
                <a href="booleen.php" class="list-group-item list-group-item-action ">Les booleens</a>
                <a href="variable.php" class="list-group-item list-group-item-action ">Les varialbes</a>
                <a href="tableaux.php" class="list-group-item list-group-item-action ">les tableaux</a>
                <a href="objets.php" class="list-group-item list-group-item-action ">Les objets</a>
                <a href="fonctions.php" class="list-group-item list-group-item-action ">Les fonctions</a>
                <a href="dom.php" class="list-group-item list-group-item-action ">Le DOM</a>
                <a href="quizz.php" class="list-group-item list-group-item-action active">JS quiz</a>

            </div>
        </div>

        <div class="col-8">


            <form action="calculScoreQuizzJS.php">

                <legend>JS QUIZ</legend>

                <fieldset class="form-group">
                    <legend class="mt-4">Le tableau vide est évalue a </legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question1" id="optionsRadios1" value="option1" >
                            true
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question1" id="optionsRadios2" value="option2">
                            false
                        </label>
                    </div>
                </fieldset>


                <fieldset class="form-group">
                    <legend class="mt-4">soit la chaine s correspond a "Javascript", s.charAt(2) donne</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question2" id="optionsRadios1" value="option1" >
                              J
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question2" id="optionsRadios2" value="option2">
                            a
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question2" id="optionsRadios3" value="option3" >
                            v
                        </label>
                    </div>
                </fieldset>



                <fieldset class="form-group">
                    <legend class="mt-4">Parmi ces identifiants, lequel n'est pas valide </legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question3" id="optionsRadios1" value="option1" >
                            javascript
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question3" id="optionsRadios2" value="option2">
                            $javascript
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question3" id="optionsRadios3" value="option3" >
                            *javascript
                        </label>
                    </div>
                </fieldset>




                <fieldset class="form-group">
                    <legend class="mt-4"> Quel outil nous permet de tronquer un tableau  </legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question4" id="optionsRadios1" value="option1" >
                            la methode length
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question4" id="optionsRadios2" value="option2">
                            l’attribut length
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question4" id="optionsRadios3" value="option3" >
                            l'element delete
                        </label>
                    </div>
                </fieldset>



                <fieldset class="form-group">
                    <legend class="mt-4">var x ; la valeur de x sera</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question5" id="optionsRadios1" value="option1" >
                            false
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question5" id="optionsRadios2" value="option2">
                            0
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="question5" id="optionsRadios3" value="option3" >
                            undefined
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
                <a class="boutton" href="dom.php">
                    <button type="button" class="btn btn-primary"> < Previous</button>
                </a>

            </div>

        </div>
    </div>




</body>
</html>
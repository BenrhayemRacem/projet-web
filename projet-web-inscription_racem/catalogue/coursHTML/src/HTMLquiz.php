<?php

?>

<!DOCTYPE html>
<html lang="en">
<head style="border-left-width: 0  ; border-left-style: solid;">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="Assets/Logohead.png">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"
          type='text/css'>
    <script defer src="node_modules\@fortawesome\fontawesome-free\js\brands.js"></script>
    <script defer src="node_modules\@fortawesome\fontawesome-free\js\solid.js"></script>
    <script defer src="node_modules\@fortawesome\fontawesome-free\js\fontawesome.js"></script>
    <link rel="stylesheet" href="Assets/Style.css">
    <link rel="stylesheet" href="Assets/Stylecourse.css">
    <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/yeti/bootstrap.min.css">

    <title> HTML video</title>
</head>


<body>
<div id="page">

    <div class="main">
        <div class="jumbotron">



            <form>

                    <legend>HTML QUIZ</legend>

                    <fieldset class="form-group">
                        <legend class="mt-4">Pour définir un titre DANS une page HTML, on utilise...</legend>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="question1" id="optionsRadios1" value="option1" checked="">
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
                            <input type="radio" class="form-check-input" name="question2" id="optionsRadios1" value="option1" checked="">
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
                            <input type="radio" class="form-check-input" name="question3" id="optionsRadios1" value="option1" checked="">
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
                            <input type="radio" class="form-check-input" name="question4" id="optionsRadios1" value="option1" checked="">
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
                            <input type="radio" class="form-check-input" name="question5" id="optionsRadios1" value="option1" checked="">
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
                <a class="boutton" href="HTMLfin.php">
                    <button type="button" class="btn btn-primary">Next ></button>
                </a>
            </div>

        </div>
    </div>

</div>
</div>


<footer id="main-footer">
    <p>copyrights &copy LEARN TO CREATE </p>
</footer>

<script > </script>
</body>
</html>
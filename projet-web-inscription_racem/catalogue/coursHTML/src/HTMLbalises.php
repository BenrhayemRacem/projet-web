<?php
?>

<!DOCTYPE html>
<html lang="en">
<head style="border-left-width: 0  ; border-left-style: solid;">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="Assets/Logohead.png">
    <link  href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"  rel="stylesheet"  type='text/css'>
    <script defer src="node_modules\@fortawesome\fontawesome-free\js\brands.js"></script>
    <script defer src="node_modules\@fortawesome\fontawesome-free\js\solid.js"></script>
    <script defer src="node_modules\@fortawesome\fontawesome-free\js\fontawesome.js"></script>
    <link rel="stylesheet" href="Assets/Style.css">
    <link rel="stylesheet" href="Assets/Stylecourse.css">
    <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/yeti/bootstrap.min.css">

    <title> HTML history</title>
</head>


<body>
<div class="progress">
    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 25%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<div id="page">

    <div class="main">
        <div class="jumbotron">
            <h1 class="display-3">Les balises usuelles</h1>
            <hr class="my-4">
            <p> Chaque balise represente du contenu <br>
            Exemple: < !-- ....--> represente un commentaire <br>
             < h1>,< h2>,< h3> representent des titres </p>

            <p> il existe 2 types de balise :</p>

            <p> 1/ Les balises « block » : Elles englobent le contenu. Elles
                contiennent des paragraphes, des titres, etc.</p>

            <p> Exemple: < p > Ceci est un paragraphe < /p > </p>
            <p> 2/ Les balises « inline » : Elles sont dans le texte. (mettre
                en gras, souligner, etc…) <br>
             Exemple:la balise strong </p>



            <div class="container justify-items-end">
                <a class="boutton" href="pageHome.php">
                    <button type="button" class="btn btn-primary"> Home </button>
                </a>
                <a class="boutton" href="HTMLhistory.php">
                    <button type="button" class="btn btn-primary"> < Previous </button>
                </a>
                <a class="boutton" href="HTMLtableaux.php">
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

</body>
</html>
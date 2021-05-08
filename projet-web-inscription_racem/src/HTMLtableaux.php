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

    <title> HTML Taleaux</title>
</head>


<body>
<div class="progress">
    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 40%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div id="page">

    <div class="main">
        <div class="jumbotron">
            <h1 class="display-3">Les tableaux</h1>
            <hr class="my-4">

            <p> la balise table et /table indiquent le debut et la fin du tableau</p>


            <p> Chaque ligne est represente par les balises tr et /tr </p>
            <p> Chaque colonne est represente par les balises td et /td </p>

            <p> <img src="../Assets/images/tableau.png">
            </p>
            <p> l'execution de cette image donne:
            <table>
                <tr>
                    <td>Ligne 1 – Colonne 1</td>
                    <td>Ligne 2 – Colonne 2</td>
                </tr>
                <tr>
                    <td>Ligne 2 – Colonne 1</td>
                    <td>Ligne 2 – Colonne 2</td>
                </tr>
            </table>
            </p>

            <div class="container justify-items-end">
                <a class="boutton" href="pageHome.php">
                    <button type="button" class="btn btn-primary"> Home </button>
                </a>
                <a class="boutton" href="HTMLbalises.php">
                    <button type="button" class="btn btn-primary"> < Previous </button>
                </a>
                <a class="boutton" href="HTMLinput.php">
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
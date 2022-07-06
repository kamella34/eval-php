<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<?php

include "pdo.php";
include "requetes.php";
?>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>edit article</title>
</head>

<body>



    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark ">
            <a class="navbar-brand" href="http://localhost/eval/touslesarticles.php">Retour page d'acceuil</a>
            <form action="traitement_deconnexion.php" method="POST">
                <button class="btn btn-outline-light ms-5 my-2 my-sm-0" type="submit" name="deco"> Se deconnecter</button>
            </form>
        </nav>
    </header>


    <h1 class="text-center my-5">Editer un nouvel article</h1>

    <div class="container mb-5">


        <form action="traitement_creerarticle.php" method="POST" enctype="multipart/form-data">

            <div class="input-group mb-3">
                <label for="titre" class="input-group-text">Titre de l'article</label>
                <input type="text" name="titre" id="titre" class="form-control">
            </div>

            <div class="input-group mb-3">
                <input type="file" name="img" class="form-control" id="img" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
            </div>

            <div class="input-group mb-3">
                <textarea name="resume" class="form-control" id="résumé" placeholder="Résumé" rows="10"></textarea>
            </div>

            <div class="input-group mb-3">
                <textarea name="article" class="form-control" id="article" placeholder="article" rows="10"></textarea>
            </div>

        

            <div class="input-group mb-3 justify-content-center">
                <button name="btnediter" class="btn btn-dark">Editer</button>
            </div>
        </form>

    </div>

</body>

</html>
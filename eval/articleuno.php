<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">
  <title>Cover Template for Bootstrap</title>
  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="../eval/cover.css" rel="stylesheet">
</head>

<body>
  <?php
  include "pdo.php";
  include "requetes.php";
  ?>

  <header class="masthead mb-auto">
    <div class=" d-flex h-100 p-3 mx-auto flex-column">

      <?php if (!isset($_SESSION)) { ?>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark ">
          <a class="navbar-brand p-2" href="touslesarticles.php">Eval php</a>
          <a class="btn btn-outline-light ms-5 my-2 my-sm-0 p-2" href="http://localhost/eval/inscription_connexion.php">S'inscrire</a>
          <a class="btn btn-outline-light ms-2 my-2 my-sm-0 p-2" href="http://localhost/eval/inscription_connexion.php">Se connecter</a>
          <div class="d-grid">
            <button class="btn btn-outline-light mt-2 mb-2" style="justify-self: flex-end;" type="submit" name="deco">Se deconnecter</button>
          </div>
        </nav>
      <?php

      } else { ?>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark ">
          <a class="navbar-brand" href="touslesarticles.php">Eval php</a>
          <div class="text-end">
            <form class="form-inline mt-2 mt-md-0" method="POST" action="traitement_deconnexion.php">
              <button class="btn btn-outline-light  my-2 my-sm-0" type="submit" name="deco">Se deconnecter</button>
            </form>
            <?php if ($_SESSION['status'] === 1) { ?>
              
              <a href="editarticle.php" class="btn btn-outline-light ms-5 my-2 " style="justify-self: flex-end">Editer New Article</a>
             
          <?php

            }
          } ?>
          </div>
        </nav>

  </header>

  <main role="main">








    <?php
    $article = requete_selectArticle('id_article');

    foreach ($article as $value) {
    ?>

      <h1 class="cover-heading mb-5" name="titre" style="margin-top:10rem"><?= htmlspecialchars($value["titre_article"]) ?></h1>
      <img class="card-img-top img-thumbnail w-50  mb-5 align-self-center" src="<?= htmlspecialchars($value["img_article"]) ?>" alt="Card image cap" img="name">
      <p class="lead me-sm-auto" name="article"><?= htmlspecialchars($value["article_article"]) ?></p>

      <p name="auteur"> <?= htmlspecialchars($value["auteur_article"]) ?></p>
      <p name="date"> <?= htmlspecialchars($value["date_article"]) ?></p>


    <?php
    }
    ?>





  </main>

  <footer class="mastfoot mt-auto">

  </footer>
  </div>


  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="../eval/EVAL/bootstrap-4.0.0/assets/js/vendor/jquery-slim.min.js"><\/script>')
  </script>
  <script src="../eval/EVAL/bootstrap-4.0.0/assets/js/vendor/popper.min.js"></script>
  <script src="../eval/EVAL/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
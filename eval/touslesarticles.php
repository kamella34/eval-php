<?php
session_start();
?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">
  <title>Album example for Bootstrap</title>
  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../eval/album.css">

  <!-- Custom styles for this template -->
  <link href="../eval/album.css" rel="stylesheet">
</head>

<body>

  <?php

  include "pdo.php";
  include "requetes.php";
  // include "traitement_creerarticle.php" 
  ?>

  <style type="text/css">
    a:link {
      text-decoration: none;
    }
  </style>

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

    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading mt-5">Article</h1>
        <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam quis magnam numquam aut delectus tempore aspernatur expedita tempora amet, laudantium doloribus in facilis, id ipsam, sed illo repellendus impedit rem.</p>
      </div>
    </section>

    <!-- --------------------------------------------------------------------------------------------- -->


    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row">
          <!-- 
----------------------------------------------------------------------------- -->

          <?php
          $article = requete_selectArticle('id_article');

          foreach ($article as $value) {
          ?>


            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" style="min-height:15rem; max-height:15rem" src="<?= htmlspecialchars($value["img_article"]) ?>" alt="Card image cap" name="img">
                <div class="card-body">
                  <h6 class="card-text" name="titre"><?= htmlspecialchars($value["titre_article"]) ?></h6>
                  <p class="card-text" style="min-height:10rem; max-height:10rem " name="resume"><?= htmlspecialchars($value["resume_article"]) ?></p>

                  <?php if (isset($_SESSION['status']) && $_SESSION['status'] === 1) { ?>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a href="articleuno.php" class="btn btn-sm btn-outline-secondary">View</a>

                        <form action="traitement_suppression.php" method="POST">
                          <button class="btn btn-sm btn-outline-secondary" name="btnDelete" value=<?= $value['id_article'] ?>>Supprimer</button>
                        </form>


                      </div>
                      <small class="text-muted"> <?= htmlspecialchars($value["date_article"]) ?></small>
                    </div>
                  <?php } else { ?>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a href="articleuno.php" class="btn btn-sm btn-outline-secondary">View</button></a>
                      </div>
                      <small class="text-muted" name="date"><?= htmlspecialchars($value["date_article"]) ?></small>
                    </div>
                  <?php } ?>

                </div>
              </div>
            </div>

          <?php
          }

          ?>
          <!-- -------------------------------------------------------- -->

          <?php

          ?>
  </main>




  <footer class="text-muted">
    <div class="container">
      <p class="float-left">
        <a href="#">Back to top</a>
      </p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="../eval/EVAL/bootstrap-4.0.0/assets/js/vendor/jquery-slim.min.js"><\/script>')
  </script>
  <script src="../eval/EVAL/bootstrap-4.0.0/assets/js/vendor/popper.min.js"></script>
  <script src="../eval/EVAL/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
  <script src="../eval/EVAL/bootstrap-4.0.0/assets/js/vendor/holder.min.js"></script>
</body>

</html>
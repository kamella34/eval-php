
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>index</title>
</head>
<body>
<?php
include "pdo.php";
include "requetes.php";
?>

<!-------------------------------------------------------------------------------- INSCRIPTION ------------------------------------------------------------------------------------>
<div class="d-flex justify-content-around">
<section class="text-center" style="border: solid; margin:5rem 2rem 5rem 30rem; padding:3rem 2rem ">
 <h2>Inscription</h2>
<form action="traitement_inscription.php" method="POST">
  <div class="mb-3">
    <label for="nameinscript" class="form-label">Pseudo</label>
    <input type="text" class="form-control" id="nameinscript" aria-describedby="nameinscript" name="nameinscript" style="width:200px; margin:auto ">
   
  </div>
  <div class="mb-3">
    <label for="mdpinscript" class="form-label">Password</label>
    <input type="password" class="form-control" id="mdpinscript" name="mdpinscript" style="width:200px; margin:auto">
  </div>
  <div class="mb-3">
    <label for="mdpverif" class="form-label">Password again</label>
    <input type="password" class="form-control" id="mdpverif" name="mdpverif" style="width:200px; margin:auto">
  </div>
  
  <button type="submit" class="btn btn-primary" >Valider</button>
</form>
</section>
<!-------------------------------------------------------------------------------- message ok INSCRIPTION ------------------------------------------------------------------------------------>

<?php
if (isset($_GET['ok'])) {
            switch ($_GET['ok']) {
            case "inscription":
?>
                <div class="alert alert-success d-flex justify-content-center" role="alert"><p>Vous êtes inscrit</p></div>
                    
<?php
            break; 
            }
        }   

// <!-------------------------------------------------------------------------------- message notok INSCRIPTION ------------------------------------------------------------------------------------>

if (isset($_GET['notok'])) {
            switch ($_GET['notok']) {
            case "notinscription":
?>
                <div class="alert alert-danger d-flex justify-content-center" role="alert"><p>Les mots de passe ne correspondent pas</p></div>
     
<?php
            break; 
            case "champsvide":
    ?>
                    <div class="alert alert-danger d-flex justify-content-center" role="alert"><p>Veuillez remplir tous les champs</p></div>
                        
    <?php
            break; 
            }
        }   
?>


<!-------------------------------------------------------------------------------- connexion ------------------------------------------------------------------------------------>
<section class="text-center align-self-center " style="border: solid ; margin:5rem 30rem 5rem 2rem ; padding:3rem 2rem" >
<h2>Connexion</h2>
<form action="traitement_connexion.php" method="POST">
  <div class="mb-3">
    <label for="nameconnect" class="form-label">Pseudo</label>
    <input type="text" class="form-control" id="nameconnect" aria-describedby="nameconnect" name="nameconnect" style="width:200px; margin:auto">
   
  </div>
  <div class="mb-3 ">
    <label for="mdp" class="form-label">Password</label>
    <input type="password" class="form-control" id="mdp" name="mdpconnect" style="width:200px; margin:auto">
  </div>
 
  <button type="submit" class="btn btn-primary" name="btnconnect">Valider</button>
</form>
</section>
</div>
</body>
</html>

<!-------------------------------------------------------------------------------- message ok CONNEXION------------------------------------------------------------------------------------>
<?php
if (isset($_GET['okco'])) {
            switch ($_GET['okco']) {
            case "dehash":
?>
                <div class="alert alert-success d-flex justify-content-center" role="alert"><p>Vous êtes connecté</p></div>
                
                <header>
                  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark " >
                    <a class="navbar-brand" href="http://localhost/eval/touslesarticles.php">Acceder au site</a>
                    <form action="traitement_deconnexion.php" method="POST">
                    <button class="btn btn-outline-light ms-5 my-2 my-sm-0" type="submit" name="deco"> Se deconnecter</button>
                    </form>
                  </nav>
                </header>

                    
<?php
            break; 
            }
        }  
// <!-------------------------------------------------------------------------------- message notok CONNEXION------------------------------------------------------------------------------------>
if (isset($_GET['notokco'])) {
    switch ($_GET['notokco']) {
    case "notpseudexist":
?>
        <div class="alert alert-danger d-flex justify-content-center" role="alert"><p>Les informations ne correspondent pas</p></div>

<?php
    break; 
    case "notmdpexist":
      ?>
              <div class="alert alert-danger d-flex justify-content-center" role="alert"><p>Les informations ne correspondent pas</p></div>
      
      <?php
          break; 
    case "deconnect":
      ?>
          <div class="alert alert-danger d-flex justify-content-center" role="alert"><p>Vous avez été deconnecté</p></div>
      
      <?php
          break;
    }
}  


var_dump($_SESSION);
?>
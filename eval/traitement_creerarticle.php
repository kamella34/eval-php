<?php
session_start();


if (isset($_POST['btnediter'])) {



   include "pdo.php";
   include "requetes.php";
   
   
   
   
   $titre = $_POST["titre"];
   $resume = $_POST["resume"];
   $article = $_POST["article"];
   // $date = $_POST["date"];
   $img = $_FILES["img"]["name"];
   $auteur = $_SESSION['user'];
   
   
   
   $stockImg = "img/";
   $file = $_FILES['img'];
   $titreminuscule = strtolower($_POST['titre']);
   $veriftitre = requete_findArticle($titre);
   $extensionImg = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
   $random = rand(0, 99999);
   $file['name'] = str_replace(" ", "_", $file['name']);
   $NewCheminfile = $stockImg . $random . "_" . $titreminuscule . "." . $extensionImg;
   // $Oldcheminfile = $file["img_article"];
   $newName = $random . "_" . $titreminuscule . "." . $extensionImg;


   move_uploaded_file($file["tmp_name"], $NewCheminfile);
   requete_addArticle($titre, $resume, $article,  $NewCheminfile, $auteur);
  
   header("location: touslesarticles.php");
   var_dump($file);
}

?>

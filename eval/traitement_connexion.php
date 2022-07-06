
<?php
session_start();
include "pdo.php";
include "requetes.php";



if (isset($_POST['btnconnect'])) {
    $verifnameexist = requete_findUser($_POST['nameconnect']);

    if(!$verifnameexist){
        header("location: inscription_connexion.php?notokco=notpseudexist");

    } else if (password_verify($_POST['mdpconnect'],$verifnameexist['mdp_user'])){
       
        $_SESSION['user'] = $_POST['nameconnect'];
        $_SESSION['id_user'] = $verifnameexist['id_user'];
        $_SESSION['status'] = $verifnameexist['status_user'];



        header("location: inscription_connexion.php?okco=dehash");
       
    } else {
        header("location: inscription_connexion.php?notokco=notmdpexist");
    }
}


?>
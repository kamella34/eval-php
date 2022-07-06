

<?php

include "pdo.php";
include "requetes.php";


if(!empty($_POST['nameinscript'] && !empty($_POST['mdpinscript']) && !empty($_POST['mdpverif']))){
    if($_POST['mdpinscript'] === $_POST['mdpverif']){
       $passhash= password_hash($_POST['mdpverif'],PASSWORD_DEFAULT);
        requete_addUser(2 ,$_POST['nameinscript'],$passhash);
        header("location: inscription_connexion.php?ok=inscription");

    }else{
        header("location: inscription_connexion.php?notok=notinscription");
       

    }
} else {
        header("location: inscription_connexion.php?notok=champsvide");
       
}







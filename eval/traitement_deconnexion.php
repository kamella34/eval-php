<?php
session_start();




if (isset($_POST['deco'])){
   
    session_destroy();
    header("location: inscription_connexion.php?notokco=deconnect");

}



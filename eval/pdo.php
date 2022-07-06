<?php 

function connexion_BD()
{
        $db = new PDO("mysql:host=localhost;dbname=eval;charset=utf8", "root", "");
        return $db;

}
?>
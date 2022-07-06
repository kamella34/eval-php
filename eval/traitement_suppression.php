  
<?php


include "pdo.php";
include "requetes.php";


if (isset($_POST["btnDelete"])){
    requete_deleteArticle($_POST["btnDelete"]);
header("location: touslesarticles.php");
}


?>
</body>
</html>
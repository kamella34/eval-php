<?php

function requete_addUser($status,$name, $mdp) {
    $db = connexion_BD();
    $sql = "INSERT INTO users (status_user, pseudo_user, mdp_user) VALUES (:status,:name, :mdp)";
    $req = $db->prepare($sql);
    $result = $req->execute([
        ":status"=>$status,
        ":name" => $name,
        ":mdp" => $mdp,
        
    ]);
    return $result;
}


function requete_findUser($pseudo) {
    $db = connexion_BD();
    $sql = "SELECT * FROM users WHERE pseudo_user = :pseudo";
    $req = $db->prepare($sql);
    $req->execute([
        ":pseudo"=>$pseudo
    ]);
    $data = $req->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function requete_addArticle($titre, $resume, $article, $img, $auteur) {
    $db = connexion_BD();
    $sql = "INSERT INTO articles (titre_article, resume_article, article_article, img_article,auteur_article) VALUES (:titre, :resume, :article, :img, :auteur)";
    $req = $db->prepare($sql);
    $result = $req->execute([
        ":titre" => $titre,
        ":resume" => $resume,
        ":article" => $article,
        ":img" => $img,
        ":auteur" => $auteur
    ]);
    return $result;
}


function requete_deleteArticle($id) {
    $db = connexion_BD();
    $sql = "DELETE FROM articles WHERE id_article = :id";
    $req = $db->prepare($sql);
    $req->execute([
        ":id" => $id
    ]);
}

function requete_findArticle($id) {
    $db = connexion_BD();
    $sql = "SELECT * FROM articles WHERE id_article = :id";
    $req = $db->prepare($sql);
    $req->execute([
        ":id" => $id
    ]);
    $data = $req->fetch(PDO::FETCH_ASSOC);
    return $data;

}

function requete_selectArticle() {
    $db = connexion_BD();
    $sql = "SELECT * FROM articles ORDER BY id_article";
    $req = $db->prepare($sql);
    $req->execute([]);
    $data = $req->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

?>
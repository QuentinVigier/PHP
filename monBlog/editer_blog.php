<?php
require_once("config_blog.php");
if ($_REQUEST["submit"]) {
    $contenu = mysqli_escape_string($connexion,
     strip_tags($_REQUEST["contenu"],"<a><i><b><img>"));
    $annonce = substr(strip_tags($contenu), 0, 80);
    $titre = mysqli_escape_string($connexion,strip_tags($_REQUEST["titre"]));
    $categorie = mysqli_escape_string($connexion,strip_tags($_REQUEST["categorie"]));
    $q = "INSERT INTO billets_blog
 (titre, contenu, categorie, annonce, date_billet)
 VALUES ('$titre', '$contenu', '$categorie', '$annonce', now())";
    mysqli_query($connexion, $q) or die(mysqli_error($connexion));
    $id = mysqli_insert_id($connexion);
    // header("Location: affiche_blog.php?ID=".$id); 
    header('location: ../monblog/affiche_blog.php?ID='.$id);
}
else {
    $smarty->assign("titre", "Blog : poster un billet");
    $smarty->display("edition_blog.tpl");
   }
   ?> 
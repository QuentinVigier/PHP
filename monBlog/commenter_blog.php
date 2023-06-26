<?php
require_once("config_blog.php");
$ID = intval($_REQUEST["ID"]);
/* Recherche le billet pour vérifier qu’il existe bien. */
$requete = "SELECT titre FROM billets_blog WHERE ID = $ID";
$resultat = mysqli_query($connexion, $requete) or die(mysqli_error($connexion));
if (mysqli_num_rows($resultat) != 1) {
header("Location: ../monblog/index_blog.php");
exit;
}
$nom = mysqli_escape_string($connexion, strip_tags($_REQUEST["nom"]));
$commentaire = mysqli_escape_string($connexion, strip_tags($_REQUEST["commentaire"]));
$commentaire = nl2br($commentaire);
if (!empty($nom) && !empty($commentaire)) {
$requete = "INSERT INTO commentaires_blog
(nom, comment, ID, date_comment)
VALUES ('$nom', '$commentaire', $ID, now())";
mysqli_query($connexion, $requete) or die(mysqli_error($connexion));
}
header("Location: ../monblog/affiche_blog.php?ID=$ID");
?>
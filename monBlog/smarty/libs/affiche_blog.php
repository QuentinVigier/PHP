<?php
require_once("config_blog.php");
$ID = intval($_REQUEST['ID']);
$requete = "SELECT titre, categorie, contenu,
UNIX_TIMESTAMP(date_billet) AS date_billet
FROM billets_blog
WHERE ID = $ID";
$resultat = @mysqli_query($requete, $connexion) or die(mysqli_error($connexion));
if (mysqli_num_rows($resultat) == 0) {
die('Identifiant incorrect');
}
$ligne = mysqli_fetch_array($resultat);
$smarty->assign("titre", $ligne["titre"]);
$smarty->assign("contenu", $ligne["contenu"]);
$smarty->assign("categorie", $row["categorie"]);
$smarty->assign("date", date("j M Y, G:m", $ligne["date_billet"]));
$smarty->assign("id", $ID);
/* Recherche des commentaires. */
$requete = "SELECT comment, nom,
UNIX_TIMESTAMP(date_comment) AS date_comment
FROM commentaires_blog
WHERE ID = $ID
ORDER BY date_comment ASC";
$resultat = @mysqli_query($requete, $connexion) or die(mysqli_error($connexion));
$commentaires = array();
while ($ligne = mysqli_fetch_array($resultat)) {
$commentaires[] = array(
"nom" => $ligne["nom"],
"comment" => $ligne["comment"],
"date" => date("j M Y, G:m", $ligne["date_comment"]),
);
} 
$smarty->assign("commentaires", $commentaires);
/*Il ne reste plus qu’à traiter le template :
 Affichage de la page. */
$smarty->display("affiche_blog.tpl");
?>
<?php
require_once("config_blog.php");
if ($_REQUEST["categorie"]) {
$categorie = mysqli_escape_string($connexion, $_REQUEST["categorie"]);
$clause_where = "WHERE categorie = '$categorie'";
$smarty->assign("categorie", $categorie);
} else {
$clause_where = "";
$smarty->assign("categorie", "");
}
$sql = "SELECT titre, categorie, annonce,
UNIX_TIMESTAMP(date_billet) AS date_billet, ID
FROM billets_blog
$clause_where
ORDER BY date_billet DESC
LIMIT 0, 20";
$resultat = @mysqli_query($sql, $connexion) or die (mysqli_error($connexion));
if (mysqli_num_rows($resultat) == 0) {
die("Aucun billet n’a été trouvé.");
}
$elts = array();
while ($ligne = mysqli_fetch_array($resultat)) {
    $elts[] = array(
        "ID" => $ligne["ID"],
        "date" => date("j M Y, G:m", $ligne['date_billet']),
        "titre" => $ligne["titre"],
        "annonce" => $ligne["annonce"],
        "categorie" => $ligne["categorie"],
        "param_cat" => urlencode($ligne["categorie"]),
    );
}
$smarty->assign("billets", $elts);
$smarty->assign("titre", "Blog : index");
$smarty->display("index_blog.tpl");
?>
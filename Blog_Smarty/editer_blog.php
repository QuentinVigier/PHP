<?php
    require_once('config_blog.php');
    $bdd = retourCNX();

    require_once("./Smarty.inc");
    $smarty->display("edition_blog.tpl");

if ($_REQUEST['submit']){
// $temps = now();
// echo now();
$titre = $_POST['titre'];
$contenu = $_POST['contenu'];
$annonce = $_POST['contenu'];
$date_billet = date ("d/m/Y H:i:s");
$categorie = $_POST['categorie'];

$bdd->exec("INSERT INTO billets_blog(titre, contenu, annonce, date_billet, categorie) values (
    '".$titre."', '".$contenu."', '".$annonce."','".$date_billet."','".$categorie."') ");
    header("Location: ./afficher_blog.php"); 
}
else{
    $smarty->assign("titre", "Blog : poster un billet");   
    $smarty->display("editer_blog.tpl"); 
}


?>
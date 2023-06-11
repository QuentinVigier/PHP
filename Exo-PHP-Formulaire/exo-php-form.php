<?php
    require_once('cnxConfig.php');
    $bdd = retourCNX();

if(isset($_POST['civilite']) && isset($_POST['nom']) && 
    isset($_POST['prenom']) && isset($_POST['ddn']) && 
    isset($_POST['commune']) && isset($_POST['telephone'])
    && isset($_POST['mail']) && isset($_POST['site']) && 
    isset($_POST['niveau']) && isset($_POST['lgge'])
    )
{

    $civilite = $_POST['civilite'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $ddn = $_POST['ddn'];
    $commune = $_POST['commune'];
    $mail = $_POST['mail'];
    $site = $_POST['site'];
    $niveau = $_POST['niveau'];
    $lgge = $_POST['lgge'];

}

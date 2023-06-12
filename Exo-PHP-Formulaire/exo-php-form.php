<?php
    require_once('cnxConfig.php');
    $bdd = retourCNX();

    // $bdd->exec("insert into client(civilite, nom, prenom) values ($civilite, $nom, $prenom)");
    $bdd->exec("CREATE TABLE IF NOT EXISTS client(
        idClient INT AUTO_INCREMENT,
        civilite VARCHAR(15),
        nom VARCHAR(99),
        prenom VARCHAR(99),
        ddn DATE,
        commune VARCHAR(99),
        phone VARCHAR(99),
        mail VARCHAR(99),
        web VARCHAR(99),
        niveau VARCHAR(99),
        lgge VARCHAR(99),
        PRIMARY KEY(idClient))");
// if(isset($_POST['civilite']) && isset($_POST['nom']) && 
//     isset($_POST['prenom']) && isset($_POST['ddn']) && 
//     isset($_POST['commune']) && isset($_POST['telephone'])
//     && isset($_POST['mail']) && isset($_POST['web']) && 
//     isset($_POST['niveau'])
//     )
// {
    echo "Bonjour";
    $civilite = $_POST['civilite'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $ddn = $_POST['ddn'];
    $commune = $_POST['commune'];
    $telephone = $_POST['telephone'];
    $mail = $_POST['mail'];
    $web = $_POST['web'];
    $niveau = $_POST['niveau'];

    $chk = $_POST['lgge'];
    $lgge = implode(", ",$chk);

    $bdd->exec("INSERT INTO client(civilite, nom, prenom, ddn, commune, phone, mail, web, niveau, lgge) values ('".$civilite."', '".$nom."', '".$prenom."', '".$ddn."', '".$commune."',
    '".$telephone."', '".$mail."', '".$web."', '".$niveau."', '".$lgge."')");
// }


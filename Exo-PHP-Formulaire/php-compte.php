<?php
    require_once('cnxConfig.php');
    $bdd = retourCNX();

    $bdd->exec(
        "CREATE TABLE IF NOT EXISTS compte(
            idCompte INT AUTO_INCREMENT,
            pseudo VARCHAR(99),
            mdp VARCHAR(99),
            photo VARCHAR(255),
            idClient INT, 
            PRIMARY KEY(idCompte),
            FOREIGN KEY(idClient) REFERENCES client(idClient))"
        );

    if(isset($_POST['pseudo']) && isset($_POST['mdp'])){
    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp'];
    $lastID = $bdd->prepare("SELECT MAX(idClient) FROM client");
    $lastID->execute();
    $max = $lastID->fetch();
    $idclient = $max[0];

    $photo = uploaderImage($_FILES['img1']);


    $req = $bdd->prepare("INSERT INTO compte(pseudo, mdp, photo, idClient) values ('".$pseudo."','".$mdp."','".$photo."','".$idclient."')");
    $req->execute();

    $idCompte = 2;
    $str2 ="SELECT photo FROM compte WHERE idCompte = $idCompte";
    $req2 = $bdd->prepare($str2);
    $req2->execute();
    $d = $req2->fetch();
    echo "<img src ='". $d[0] . "' alt='oups'>";
    }
?>
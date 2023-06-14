<?php
    require_once('cnxConfig.php');
    $bdd = retourCNX();

    $bdd->exec(
        "CREATE TABLE IF NOT EXISTS compte(
            idCompte INT AUTO_INCREMENT,
            pseudo VARCHAR(99),
            mdp VARCHAR(99),
            idClient INT, 
            PRIMARY KEY(idCompte),
            FOREIGN KEY(idClient) REFERENCES client(idClient)"
        );

    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp'];
    $lastID = $bdd->prepare("SELECT MAX(idClient) FROM client");
    $lastID->execute();
    $max = $lastID->fetch();
    $idclient = $max[0];

    $bdd->exec("INSERT INTO compte(pseudo, mdp, id_client) values ('".$pseudo."','".$mdp."',".$idclient.")");

    // $target_dir = "uploads/";
	// $target_file = $target_dir . basename($_FILES["img1"]["name"]);
	// $uploadOk = 1;
	// $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
?>
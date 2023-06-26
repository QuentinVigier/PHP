<?php

session_start();
$connexion = @mysqli_connect("localhost", "root", "",false,0) or
 die("Échec de la connexion.");
$bd = @mysqli_select_db($connexion,"monblog") or die(mysqli_error($connexion));
//echo 'Connexion bdd réussie';
require_once("smarty/libs/Smarty.class.php");
$smarty = new Smarty();
//$smarty->display('test.tpl');
$smarty->display('edition_blog.tpl');
?> 

<?php

    /*
        3 extensions pour la connexion vers la bdd:
            mysql_ : ancienne (mysql)
            mysqli_ : amélioration (mysql)
            PDO : la plupart des sgbd (mysql, oracle, postgreSQL...)
    */
    // function retourConnexion(){
    //     try{
    //         $bdd = new PDO('mysql:host=localhost;
    //         dbname=monblog;charset=utf8','root','');
    //         //echo 'Connexion bdd réussie';
    //     } catch(Exception $e){
    //         die('Erreur : '.$e->getMessage());
    //     }
    //     require_once ("smarty/Smarty.class.php");
    //     $smarty = new Smarty();
    //     return $bdd;
    // }

  
?>


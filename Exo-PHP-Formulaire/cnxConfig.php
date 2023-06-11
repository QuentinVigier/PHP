<?php
function retourCNX(){
    try{
    $bdd = new PDO('mysql:host=localhost;
    dbname=dbusers;charset=utf8','root','');
    echo "Connexion réussie";
}catch(Exception $e){
    die($e->getMessage());
}
return $bdd;
}
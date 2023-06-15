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

function uploaderImage($image){
    $chemin = " ";
    if(isset($image) && $image['error']==0){
        if($image['size'] <= 3000000){
            $infoImage = pathinfo($image['name']);
            $extensionImage = $infoImage['extension'];
            $extensionTab = array('gif', 'jpeg', 'jpg', 'png', 'bmp');
            if(in_array($extensionImage, $extensionTab)){
                move_uploaded_file($image['tmp_name'], 'uploads/'.time().basename($image['name']));
                $chemin = 'uploads/'.time().basename($image['name']);
            }
        }
    }
    return $chemin;
}
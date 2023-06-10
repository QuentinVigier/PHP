<?php
echo "<p> Votre commande de pizza";
if(isset($_REQUEST['compo'])){
    $c =count($_REQUEST['compo']);
    echo"(";
    for ($i = 0 ; $i< $c; $i++){
        echo$_REQUEST['compo'][$i].", ";
        }
        echo")";
    }
        ?>
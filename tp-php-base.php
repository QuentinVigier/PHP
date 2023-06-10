<?php
var_dump(1 + 2) ; echo '<br/>';
var_dump('1'+ '2'); echo '<br/>';
var_dump(1 . 2) ; echo '<br/>';
var_dump('1' . '2'); echo '<br/>';
// var_dump("3 fruits" + '1 légume' . 'donnent'); echo '<br/>';
// var_dump("3 fruits" . '1 légume' + 'donnent'); echo '<br/>';
// var_dump(1/2 + true -"-2"); echo '<br/>'; 

$voitures = 3;
$motos = 6;
echo '<p>J\'ai '.$voitures.' voitures et '.$motos.' motos, j\'ai donc '.($voitures+$motos).' vehicules </p>';
echo "<p> J'ai $voitures voitures et $motos motos, j'ai donc ".($voitures+$motos)." véhicules";


// exercice 2
echo '<ul>';
    for ($i=1; $i <= 10; $i++) {
        echo '<li>'."7 * $i = ".(7*$i).'<li>';
    }
    echo '</ul>';

echo '<table>';
    for ($i=1; $i <= 10; $i++){
        echo '<tr>'."<td> 7*$i = </td>"."<td>".(7*$i)."</td> </tr>";
    }
    echo '</table>';


// exercice 3

//3.1
    $t = ['a'=>'z', 10=>20, 'toto'=>'titi', 'php'];
    //Les clés sont 'a', '10', 'toto', "11"
    // Les valeurs sont 'z', '20, 'titi', 'php'

//3.2
    $tab = [
        1 => 2,
        "Clé" => "Valeur",
    ];
    // une clé peut être un entier ou une chaîne de caractères
    // une valeur peut être n'importe quel type

//3.3
    $tab['bon']='jour';
    $tab[]='nuit';
    var_dump($tab);
    // L'interpréteur donne la clé [2] pour la valeur 'nuit' comme la clé [1] existe déjà


//exercice 4

//4.1
$tabE1 = [ 'Frédérique' => 12, 'Silvia' => 3, 'Julien' => 19, 'Lionel' => 12, 'Mario' => 12, 'Andrea' => 9, 'Gérard' => 3 ]; 

echo '<ol>';
foreach($tabE1 as $cle => $valeur){
    echo '<li>';
    echo $cle;
    echo '</li>';
}
echo '</ol>';

//4.2
echo '<table border>';
foreach($tabE1 as $cle => $valeur){
    echo '<tr>';
    echo $cle.' = '. $valeur;
    echo '</tr> <br/>';
}
echo '</table>';

//4.3
$tabE2 = [3 => "Silvia"," Gérard",
          9 => "Andrea",
          12 => "Lionel"," Mario"," Frédérique",
          19 => "Julien" ];
var_dump($tabE2);

//4.4
echo '<ol>';
foreach($tabE2 as $cle => $valeur){
    foreach($v as sk=>sv){
    echo '<li>';
    echo $sv;
    echo '</li>';
}
}
echo '</ol> </br>';

echo '<table border>';
foreach($tabE2 as $cle => $valeur){
    foreach($v as sk=>sv){
    echo '<tr>
        <td> $sv </td>
        <td> $k </td>
        </tr>';
}
}
echo '</table> </br>';



//Exercice 5
$anneeScolaire = [
    "Rentrée" => [5,9,2016],
    "Vacances Toussaint" => [ "début" => [22,10,2016], "fin" => [30,10,2016]],
    "Vacances Noël" =>[ "début" => [17,12,2016], "fin" => [2,1,2017] ],
    "Vacances d'hiver" =>[ "début" => [11,2,2017], "fin" => [19,2,2017] ],
    "Vacances de printemps" =>[ "début" => [1,4,2017], "fin" => [9,4,2017] ],
    "Fin des cours" => [8,7,2017] ]; 

    echo '<ul>;'
foreach($anneeScolaire as $key => $value) {
    echo '<li> $k :';
    if(count($v) == 3){
        echo implode("/", $v). "</li>";
    }
    else{
        foreach($v as $sv){
            echo " du ". implode("/", $v["début"]). " au ". implode("/", $v["fin"]). "</li>";
        }
    }
}
echo "</ul>";

//Exercice 6
$tab = [ 2 => 'test', 0 => 'nombre' ]; if (in_array(2, $tab)) 
echo '<p> in_array : 2 est dans le tableau </p>';
 if(in_array('nombre', $tab))
echo '<p> in_array : nombre est dans le tableau </p>';
//Il n'affiche que la deuxième chaine de caractères

//Ecercice 7
$joueurs = [['nom' => 'Mehwish', 'score' => 150], 
['nom' => 'Laurent', 'score' => 120], 
['nom' => 'Ines', 'score' => 98], 
['nom' => 'Sondes', 'score' => 153], 
['nom' => 'Davide', 'score' => 118] ]; 

function meilleur_joueur($tab){
    $max = 0;
    $nom = ' ';
    foreach($tab as $v){
        if($max <$v['score']){
            $max = $v['score'];
            $nom = $v['nom'];
        }
    }
    return $max;
}
echo meilleur_joueur($joueurs);
    ?>


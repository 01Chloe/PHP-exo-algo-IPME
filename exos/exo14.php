<?php
$nombres = [10, 42, 5, 8, 42, 19];
$recherche = 42;
$nb = [];

if(in_array($recherche, $nombres)){
    var_dump(array_keys($nombres, 42));
    $nb = array_keys($nombres, 42);
    var_dump($nb);
}

if(count($nb) > 0){
    echo $recherche . " apparait " . count($nb) . " fois dans le tableau";
} else {
    echo $recherche . " n'apparait pas dans le tableau";
}


?>
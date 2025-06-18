<?php
$mot = 'ordinateur';
$lowerWord = strtolower($mot);
$lettre = 'r';
$pos = [];

for($i = 0; $i < strlen($mot); $i++){
    if($lowerWord[$i] === $lettre){
        array_push($pos, $i);
    }
}

if(count($pos) > 0) {
    echo "La lettre " . $lettre . " est présente " . count($pos) . " fois dans le mot " . $mot;
} else {
    echo "La lettre " . $lettre . " n'est pas présente dans le mot " . $mot;
}


?>
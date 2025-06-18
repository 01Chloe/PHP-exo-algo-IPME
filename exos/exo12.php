<?php 
$limite = 50;
$multipleDe = 7;
$nbMultiple = 0;

for($i = 1; $i <= $limite; $i++){
    if($i % $multipleDe === 0){
        $nbMultiple++;
    }
}

echo "Il y a " . $nbMultiple . " multiple de " . $multipleDe . " entre 1 et " . $limite . "."

?>
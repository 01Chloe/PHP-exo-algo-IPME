<?php 
$valeurs = [8, 3, 5, 1, 9];
// $min = 0;

// for($i = 0; $i < count($valeurs) -1; $i++){
//     if($valeurs[$i] < $valeurs[$i + 1]){
//         $min = $valeurs[$i];
//     }
// }
// echo "Le plus petit nombre est : " . $min;

// ou

$min = $valeurs[0];

for($i = 0; $i < count($valeurs); $i++){
    if($valeurs[$i] < $min){
        $min = $valeurs[$i];
    }
}
echo "Le plus petit nombre est : " . $min;
 
?>
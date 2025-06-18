<?php 

$myVar = "Hello World";
echo $myVar;

// HTML dans PHP mais c'est pas une très bonne pratique
echo '<p>' . $myVar . '</p>';

$tableau = [20, 12, 23];
var_dump($tableau);

// boucle for
for($i = 0; $i < count($tableau); $i++) {
    echo $tableau[$i] . " ";
}

// boucle foreach
foreach($tableau as $item){
    echo $item . ' ';
}






?>
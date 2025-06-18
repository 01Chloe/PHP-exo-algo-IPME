<?php
$de1 = rand(1, 6);
$de2 = rand(1, 6);

if($de1 + $de2 === 7 || $de1 + $de2 === 11){
    echo "Gagné !";
} else {
    echo "Perdu";
}



?>
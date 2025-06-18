<?php
$nombres = [1, 3, 5, 7, 9];
$doubles = [];

foreach($nombres as $nb) {
    array_push($doubles, $nb * 2);
}

var_dump($doubles)

?>
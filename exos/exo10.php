<?php
$mot = 'radar';
$lowerWord = strtolower($mot);
$splitWord = str_split($lowerWord);

$inverseWord = "";
for($i = count($splitWord)-1; $i >= 0; $i--) {
    $inverseWord .= $splitWord[$i];
}

if($lowerWord == $inverseWord){
    echo $mot . " est un palindrome";
} else {
    echo $mot . " n'est pas un palindrome";
}


?>
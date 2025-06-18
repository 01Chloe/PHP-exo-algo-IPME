<?php
$mot = 'radar';
$lowerWord = strtolower($mot);
$splitWord = str_split($lowerWord);

$inverseWord = "";
for($i = count($splitWord)-1; $i >= 0; $i--) {
    $inverseWord .= $splitWord[$i];
    echo "<br>";
}

if($lowerWord == $inverseWord){
    echo $mot . " " . "Est un palindrome";
} else {
    echo $mot . " " . "N'est pas un palindrome";
}


?>
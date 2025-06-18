<?php
$phrase = "Bonjour tout le monde";
$lowerPhrase = strtolower($phrase);
$arrayPhrase = str_split($lowerPhrase);
var_dump($arrayPhrase);
$nbVowel = 0;

$voyelles = ["a", "e", "i", "o", "u", "y"];

foreach($arrayPhrase as $letter){
    if(in_array($letter, $voyelles, false)) {
        $nbVowel++;
    }
}
echo $nbVowel;

?>
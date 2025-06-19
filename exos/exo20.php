<?php
$elements = ['X', 'O'];
$grille = [];

while(count($grille) < 3) {
    $line = [];
    for($i = 0; $i < 3; $i++){
        $randomEl = rand(0, 1);
        echo $elements[$randomEl];
        $line[] = $elements[$randomEl];
    }
    $grille[] = $line;
}

//var_dump($grille);
$win = 0;

foreach($grille as $keyLine => $lines){
    var_dump($lines);
    if(($grille[$keyLine][0] === $grille[$keyLine][1] && $grille[$keyLine][0] === $grille[$keyLine][2])
    || ($grille[$keyLine][0] === $grille[1][$keyLine] && $grille[$keyLine][0] === $grille[2][$keyLine])
    || ($grille[1][1] === $grille[0][$keyLine] && $grille[1][1] === $grille[2][2- $keyLine])) {
        $win++;
    }
}

if($win === 3) {
    echo "Gagné";
}

?>
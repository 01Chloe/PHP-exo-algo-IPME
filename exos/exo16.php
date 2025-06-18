<?php
$mysteres = [38, 72, 15];
$tryCount = 0;

foreach($mysteres as $m){
    $random = rand(1, 100);
    while($random !== $m){
        $random = rand(1, 100);
        $tryCount++;
    }
    if($random === $m){
        echo "Nombre mystère " . $m . " trouvé en ". $tryCount . " essais";
        echo "<br>";
    }
}



?>
<?php
$a = 12;
$b = 4;
$operations = ['+', '-', '*', '/'];

for($i = 0; $i < count($operations); $i++){
    echo $a . " " . $operations[$i] . " " . $b . " = ";
    switch ($operations[$i]) {
        case "+":
            echo $a + $b . "<br>";
            break;
        case "-":
            echo $a - $b . "<br>";
            break;
        case "*":
            echo $a * $b . "<br>";
            break;
        case "/":
            if($b === 0) {
                echo "Division par 0 interdite <br>";
            } else {
                echo $a / $b . "<br>";
            }
            break;
    }
}

?>
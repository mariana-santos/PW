<?php
    $array = array();
    for($i = 0; $i < 10; $i++){
        $array[$i] = rand (1, 50);
    }
    echo("Array aleatório:");
    echo("<br>");
    for($i = 0; $i < 10; $i++){
        echo($array[$i]);
        echo(" ");
    }
    echo("<br>");
    echo("<br>");
    echo("Array invertido:");
    echo("<br>");
    for($i = 9; $i >= 0; $i--){
        echo($array[$i]);
        echo(" ");
    }


?>
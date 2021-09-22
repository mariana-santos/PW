<?php

    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];
    $num4 = $_GET['num4'];

    $array = array($num1, $num2, $num3, $num4);

    echo("<center> <h1> Valores na ordem informada: </h1> </center> ");

    foreach($array as $i => $value){
        echo("<center>" . ($i + 1) . "° posição: " . $value . "</center> <br>");
    }

    $arrayInvertido = array($num4, $num3, $num2, $num1);

    echo("<center> <h1> Valores invertidos: </h1> </center> ");

    for($i = 3, $j = 0; $i <= 0; $i++, $j++){
        $arrayInvertido[$j] = $array[i];
    }

    foreach($arrayInvertido as $i => $value){
        echo("<center>" . ($i + 1) . "° posição: " . $value . "</center> <br>");
    }

?>
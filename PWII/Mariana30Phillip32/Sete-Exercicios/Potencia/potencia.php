<?php
    $base = $_GET ['base'];
    $expoente = $_GET['expoente'];
    $potencia = 1;
    for($i = 1; $i <= $expoente; $i++){
        $potencia *= $base;
    }
    echo("RESULTADO: " . $potencia);
?>
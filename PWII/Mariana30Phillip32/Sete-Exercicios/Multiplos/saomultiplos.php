<?php
    $multiplo = $_POST['nbMultiplo'];
    echo("<h1>Multiplos de " . $multiplo . "</h1><br>");
    for ($i=1;$i<=$multiplo;$i++){
        if ($multiplo%$i==0){
            echo($i . "<br>");
        }
    }
?>
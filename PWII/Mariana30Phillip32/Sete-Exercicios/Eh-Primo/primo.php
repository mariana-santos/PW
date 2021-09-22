<?php
    $averificar = $_POST['nbPrimo'];
    $divisiveis=0;
    $i =1;
    for ($i;$i<=$averificar;$i++){
        if ($averificar%$i==0) $divisiveis++;
    }

    if ($divisiveis==2 ) {
        echo($averificar . " é primo ");
    }
    else {
        echo($averificar . " não é primo " );
    }
?>
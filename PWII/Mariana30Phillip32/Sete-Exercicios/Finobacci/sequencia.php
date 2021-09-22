<?php
    $termo = $_POST['nbFinobacci'];
    $t1=0;
    $t2=1;
    $f= 0;
    $i=0;
    while ($i<=$termo){
        echo($t1 . "<br>");
        $f= $t1+$t2;
        $t1=$t2;
        $t2=$f;
        $i++;
    }
?>
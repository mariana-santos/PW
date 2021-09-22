<?php
        $numero = $_POST['nbNum'];
        $array = array();
        for($i = 0; $i < 10; $i++){
            $array[$i] = rand (1, 50);
        }
        for($i = 0; $i < 10; $i++){
            echo($array[$i]);
            echo(" ");
        }
        echo("<br>");
        $contem = false;
        for($i = 0; $i < 10; $i++){
            if($array[$i] == $numero){
                $contem = true;
            }
        }
        if($contem==true){
            echo("Contém no array");
        }else{
            echo("Não contém no array");
        }
    ?>
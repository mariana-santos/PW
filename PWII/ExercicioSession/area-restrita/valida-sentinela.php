<?php

    session_start();
    if(($_SESSION['loginS'] != 'adm') || 
    ($_SESSION['senhaS'] != '123')){
        header("Location: ../index.php");
    }

?>
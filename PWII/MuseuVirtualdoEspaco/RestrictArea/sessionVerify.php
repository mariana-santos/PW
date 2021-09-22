<?php
    session_start();
    if($_SESSION['usernameSession'] != 'adm' || 
    $_SESSION['passwordSession'] != '123'){
        header("Location: ../index.php");
    }
?>
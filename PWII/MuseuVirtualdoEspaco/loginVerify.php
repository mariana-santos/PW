<?php
    $user = $_POST['txtUser'];
    $password = $_POST['txtPassword'];

    if(($user == 'adm') && ($password == '123')){
        session_start();
        $_SESSION['usernameSession'] = $user;
        $_SESSION['passwordSession'] = $password;
        header("Location: RestrictArea/welcome.php");
    }else{
        header("Location: index.php");
    }
?>
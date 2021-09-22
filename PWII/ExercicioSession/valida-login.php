<?php
    $login = $_POST['txtUser'];
    $senha = $_POST['txtSenha'];

    if(($login == 'adm') && ($senha == 123)){
        session_start();
        $_SESSION['loginS'] = $login;
        $_SESSION['senhaS'] = $senha;
        header("Location: area-restrita/index-restrito.php");
    }else{
        header("Location: index.php");
    }
?>
<?php

    $nome = $_POST['txtNome'];
    $cpf = $_POST['txtCPF'];
    $dataNasc = $_POST['dataNasc'];
    $rg = $_POST['txtRG'];
    $turma = $_POST['txtTurma'];

    $array = array("Nome" => $nome,
    "CPF" => $cpf,
    "Data de Nascimento" => $dataNasc,
    "RG" => $rg,
    "Turma" => $turma);

    echo("<center> <h1> Suas informações: </h1> </center");

    foreach($array as $key => $value){
        echo($key . ": " . $value . "<br>");
    }

?>
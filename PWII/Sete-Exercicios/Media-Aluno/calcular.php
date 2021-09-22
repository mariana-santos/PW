<?php
    $nota1 = $_POST['nbNumero1'];
    $nota2 = $_POST['nbNumero2'];
    $nota3 = $_POST['nbNumero3'];
    $nota4 = $_POST['nbNumero4'];

    $media = (($nota1 + $nota2 + $nota3 + $nota4)/4);

    echo("Sua média foi: ". $media . "<br>");
    if($media < 5){
        echo("Aluno Retido. :(");
    }else if($media < 7 && $media >= 5){
        echo("Aluno em exame. :/");
    }else{
        echo("Aluno promovido. :)");
    }
?>
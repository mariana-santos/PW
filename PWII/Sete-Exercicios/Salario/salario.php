<?php
    $salario = $_POST['salario'];
    $departamento = $_POST['departamento'];
    if($departamento == "operacional"){
        echo("Novo salário: R$".($salario+($salario * 0.15)));
    }else{
        if($salario >= 1500 && $salario < 1750){
            echo("Novo salário: R$".($salario+($salario * 0.12)));
        }else if($salario >= 1750 && $salario < 2000){
            echo("Novo salário: R$".($salario+($salario * 0.1)));
        }else if($salario >= 2000 && $salario < 3000){
            echo("Novo salário: R$".($salario+($salario * 0.07)));
        }else{
            echo("Novo salário: R$".($salario+($salario * 0.05)));
        }
    }
?>
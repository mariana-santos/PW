<?php
    require_once "Model/Cliente.php";
    $nome = $_POST['nomeCliente'];
    $rg = $_POST['rgCliente'];
    $cpf = $_POST['cpfCliente'];

    $cliente = new Cliente();

    $cliente->setNome($nome);
    $cliente->setRG($rg);
    $cliente->setCPF($cpf);

    echo("
    <center> 
        <div class='container'>
        <div class='box'>
                <h1>Informações do Cliente: </h1>
                <b class='title'>Nome: </b>
                " .$cliente->getNome(). "
                <br>
                <b class='title'>RG: </b>
                " .$cliente->getRG(). "
                <br>
                <b class='title'>CPF: </b>
                " .$cliente->getCPF(). "
            </div>
        </div>
     </center>

     <style>
            .container {
                width: 100vw;
                height: 100vh;
                background: #6C7A89;
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center
            }
            .box {
                width: 30%;
                height: 30%;
                background: #fff;
                border-radius: 15px;
            }
            body {
                margin: 0px;
            }
            .title{
                font-family: palatino linotype;
                font-size: 20px;
                color: #0000ff;
            }
        </style>
    ");
?>
<?php
    $anoNasc = $_POST['nbAnoNasc'];
    $nome = $_POST['txtNome'];
    $cpf = $_POST['txtCPF'];
    $categoria = $_POST['slcCategoria'];
    $categorianb;
    $aVerificar;
    switch ($categoria) {
        case '1':
            $categorianb=1;
            break;
        case '2':
            $categorianb=2;
            break;
        case '3':
            $categorianb=3;
            break;
        case '4':
            $categorianb=4;
            break;
        case '5':
            $categorianb=5;
            break;
    }
    settype($anoNasc, 'integer');
    $idade= 2020-$anoNasc;
    settype ($aVerificar, 'bool');
    if ((($idade>=18 && $categorianb == 1) || ($idade>=18 && $categorianb == 2)) || ($idade>=21 && $categorianb== 3 || $categorianb==4) || ($idade>=24 && $categorianb==5)) {
        $aVerificar=true;
    }
    else {
        $aVerificar=false;
    }
    if ($aVerificar) {
        echo ("Possível retirar");
    }
    else {
        echo ("Não é possível retirar pois " . $nome . " tem " . $idade);
    }
?>
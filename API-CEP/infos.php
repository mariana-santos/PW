<?php

    //header('Location: index.php');

    $cep = $_POST['cep'];

    $cep = str_replace('.','', $cep);
    $cep = str_replace('-','', $cep);

    $url = "http://viacep.com.br/ws/$cep/json/";
    $json = file_get_contents($url);
    $json_data = json_decode($json, true);

    $cep = $json_data["cep"];
    echo "Logradouro: ". $json_data["logradouro"];
    echo "Bairro: " . $json_data["bairro"];

?>
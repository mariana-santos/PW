<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css" type="text/css">
        <title>Document</title>
    </head>
    <body>

        <div class="container-fluid">
            <div class="box">

                

                <form id="form" action="" method="POST">

                    <h1>Localização:</h1>
                    <br>

                    <div class="input-group mb-3">
                        <input id="cep" name="cep" type="text" class="form-control" placeholder="CEP" 
                        aria-label="CEP" aria-describedby="button-addon2">
                        <input type="submit" class="btn btn-outline-secondary" id="button-addon2" name="btn">
                      </div>

                    <div id="passwordHelpBlock" class="form-text label">
                        Digite seu CEP para obter as demais informações do seu local.
                        <br>
                        <br>

                    </div>

                    <div class="detalhes">

                    <?php

                        if(isset($_POST['btn'])){

                            $cep = $_POST['cep'];

                            $cep = str_replace('.','', $cep);
                            $cep = str_replace('-','', $cep);

                            $url = "http://viacep.com.br/ws/$cep/json/";
                            $json = file_get_contents($url);
                            $json_data = json_decode($json, true);
                        
                            $cep = $json_data["cep"];
                            $log = $json_data["logradouro"];
                            echo "<p> <b>Logradouro: </b>". $json_data["logradouro"]."</p>";
                            echo "<p><b>Complemento:</b> ". $json_data["complemento"]."</p>";
                            echo "<p><b>Bairro: </b>". $json_data["bairro"]."</p>";
                            echo "<p><b>Localidade: </b>". $json_data["localidade"]." - ". $json_data["uf"] ."</p>";
                        }
                    
                        
                    ?>
                    </div>

                </form>
            </div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
        <script>
            $(document).ready(function(){

                $('#cep').keypress(function(){
                    $(this).mask('00.000-000');

                    let cep = ($(this).val());

                    cep = cep.replace('.', '');
                    cep = cep.replace('-','');

                    if(cep.length() == 8){
                        
                    }
                });

            });
            
        </script>
    </body>
</html
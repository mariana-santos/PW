<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cookies</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    <body>

    <h1 class="title" style="text-align: center; font-family: palatino linotype; margin-top: 2%; text-decoration: underline; color: #3883a1; font-size: xx-large;">
            Atividade Sobre Cookies - PWII</h1>
        <h1 class="title" style="text-align: center; font-family: palatino linotype; color: #3883a1; font-size: larger;">
            Mariana Santos F. Sousa N° 28 2° mtec A</h1>


            <form method="GET" action="cookie.php">
                <label style="color: #3883a1;">Selecione uma categoria de produtos</label>
                <div class="select-style">
                    <select style="float: left;" name="slcCategoria">
                      <option value="eletronicos">Eletrônicos</option>
                      <option value="eletrodomesticos">Eletrodomésticos</option>
                      <option value="papelaria">Papelaria</option>
                      <option value="livraria">Livraria</option>
                    </select>
                  </div>
                  <input type="submit" class="btn" value="ENVIAR">
            </form>

    <?php

    if(isset($_COOKIE['categoria'])){

        switch($_COOKIE['categoria']){
            case('eletronicos'):
                criar_eletronico();
                criar_eletrod();
                criar_papelaria();
                criar_livraria();
            break;
            case ('eletrodomesticos'):
                criar_eletrod();
                criar_eletronico();
                criar_papelaria();
                criar_livraria();
            break;
            case('papelaria'):
                criar_papelaria();
                criar_eletronico();
                criar_eletrod();
                criar_livraria();
            break;
            default:
                criar_livraria();
                criar_eletronico();
                criar_eletrod();
                criar_papelaria();
        }

    }else{
        criar_eletronico();
        criar_eletrod();
        criar_papelaria();
        criar_livraria();
    }

    function criar_eletrod(){
        echo '<div class="linha">
        <div class="card">
            <img src="img/Fogao.jpg" alt="Fogao" style="width: 100%; height: auto;">
            <div class="container">
                <p style="font-size: larger;">Fogão</p> 
                <h4><b style="font-size: larger;">R$ 1299,99</b></h4> 
                </div>
        </div>
    
        <div class="card">
            <img src="img/Aspirador.jpg" alt="Aspirador de Pó" style="width: 100%; height: auto;">
            <div class="container">
                <p style="font-size: larger;">Aspirador de Pó</p> 
                <h4><b style="font-size: larger;">R$ 239,99</b></h4> 
                </div>
        </div>
    
        <div class="card">
            <img src="img/Geladeira.jpg" alt="Geladeira" style="width: 100%; height: auto;">
            <div class="container">
                <p style="font-size: larger;">Geladeira</p> 
                <h4><b style="font-size: larger;">R$ 2199,99</b></h4> 
                </div>
        </div>
    
        <div class="card">
            <img src="img/PanelaEletrica.jpg" alt="Panela Elétrica" style="width: 100%; height: auto;">
            <div class="container">
                <p style="font-size: larger;">Panela Elétrica</p> 
                <h4><b style="font-size: larger;">R$ 119,99</b></h4> 
                </div>
        </div>
    </div>';
    }

    function criar_eletronico(){

        echo'
        <div class="linha">
                <div class="card">
                    <img src="img/Celular.jpeg" alt="Celular" style="width: 100%; height: auto;">
                    <div class="container">
                        <p style="font-size: larger;">Celular</p> 
                        <h4><b style="font-size: larger;">R$ 1499,99</b></h4> 
                        </div>
                </div>
        
                <div class="card">
                    <img src="img/Impressora.png" alt="Celular" style="width: 100%; height: auto;">
                    <div class="container">
                        <p style="font-size: larger;">Impressora</p> 
                        <h4><b style="font-size: larger;">R$ 439,99</b></h4> 
                        </div>
                </div>
        
                <div class="card">
                    <img src="img/Fone.jpg" alt="Celular" style="width: 100%; height: auto;">
                    <div class="container">
                        <p style="font-size: larger;">Fone</p> 
                        <h4><b style="font-size: larger;">R$ 199,99</b></h4> 
                        </div>
                </div>
        
                <div class="card">
                    <img src="img/Play4.png" alt="Celular" style="width: 100%; height: auto;">
                    <div class="container">
                        <p style="font-size: larger;">Playstation 4</p> 
                        <h4><b style="font-size: larger;">R$ 2499,99</b></h4> 
                        </div>
                </div>
            </div>
        
        ';

    }

    function criar_papelaria(){
        echo'
        <div class="linha">

    <div class="card">
        <img src="img/PostIt.jpg" alt="Post - it" style="width: 100%; height: auto;">
        <div class="container">
            <p style="font-size: larger;">Papéis Adesivos</p> 
            <h4><b style="font-size: larger;">R$ 9,99</b></h4> 
            </div>
    </div>

    <div class="card">
        <img src="img/Caderno.jpg" alt="Caderno" style="width: 100%; height: auto;">
        <div class="container">
            <p style="font-size: larger;">Caderno</p> 
            <h4><b style="font-size: larger;">R$ 22,99</b></h4> 
            </div>
    </div>

    <div class="card">
        <img src="img/KitLapis.jpg" alt="Kit Lápis de cor" style="width: 100%; height: auto;">
        <div class="container">
            <p style="font-size: larger;">Kit Lápis de Cor</p> 
            <h4><b style="font-size: larger;">R$ 98,99</b></h4> 
            </div>
    </div>

    <div class="card">
        <img src="img/Sulfite.jpg" alt="Kit" style="width: 100%; height: auto;">
        <div class="container">
            <p style="font-size: larger;">Kit Folhas sulfite</p> 
            <h4><b style="font-size: larger;">R$ 19,99</b></h4> 
            </div>
    </div>
</div>

        ';
    }

    function criar_livraria(){
        echo'
        <div class="linha">

    <div class="card">
        <img src="img/almanaque.jpg" alt="Turma da Mônica" style="width: 100%; height: auto;">
        <div class="container">
            <p style="font-size: larger;">Almanaque da Mônica</p> 
            <h4><b style="font-size: larger;">R$ 19,99</b></h4> 
            </div>
    </div>

    <div class="card">
        <img src="img/cidadesdepapel.jpg" alt="Cidades de papel" style="width: 100%; height: auto;">
        <div class="container">
            <p style="font-size: larger;">Cidades de Papel</p> 
            <h4><b style="font-size: larger;">R$ 29,99</b></h4> 
            </div>
    </div>

    <div class="card">
        <img src="img/opequenoprincipe.jpg" alt="O Pequeno Príncipe" style="width: 100%; height: auto;">
        <div class="container">
            <p style="font-size: larger;">O Pequeno Príncipe</p> 
            <h4><b style="font-size: larger;">R$ 8,99</b></h4> 
            </div>
    </div>

    <div class="card">
        <img src="img/comoeueraantesdevc.jpg" alt="Como eu era antes de você" style="width: 100%; height: auto;">
        <div class="container">
            <p style="font-size: larger;">Como eu era antes de você</p> 
            <h4><b style="font-size: larger;">R$ 24,99</b></h4> 
            </div>
    </div>

</div>
        ';
    }
    

    ?>   
    </body>
</html>
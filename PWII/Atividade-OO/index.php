<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP orientado a objeto</title>
    </head>
    <body>
        <div class="container"> 
            <div class="box">
                <form method="POST" action="infos.php">
                    <center>
                        <h1>Informe os dados do cliente</h1>
                        <label>Nome completo: </label>
                        <input type="text" name="nomeCliente" size="40">
                        <br>
                        <br>
                        <label>RG: </label>
                        <input type="text" name="rgCliente" size="50">
                        <br>
                        <br>
                        <label>CPF: </label>
                        <input type="text" name="cpfCliente" size="50">
                        <br>
                        <br>
                        <input type="submit">
                    </center>
                </form>
            </div>
        </div>

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
                width: 50%;
                height: 40%;
                background: #fff;
                border-radius: 15px;
            }
            body {
                margin: 0px;
            }
        </style>
    </body>
</html>
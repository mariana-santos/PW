<html>
    <head lang="br">
        <title> CNH </title>
        <meta charset="utf-8">
    </head>
    <body>
            <form method="post" action="verificar.php">
            <center>
            <label>Nome :</label>
            <input type="text" name="txtNome" id="txtNome">
            <label>CPF</label>
            <input type="text" name="txtCPF" id="txtCPF">
            <label>Ano de Nascimneto</label>
            <input type="number" id="nbAnoNasc" name="nbAnoNasc">
            <select name="slcCategoria">
                <option value="1">Categoria A - Veículo</option>
                <option value="2">Categoria B - Moto</option>
                <option value="3">Categoria C - Transporte Remunerado</option>
                <option value="4">Categoria D - Caminhão</option>
                <option value="5">Categoria E - Ônibus/Mega Camminhão</option>
            </select>
            <input type="submit" value="verificar">
            </center>
        </form>
    
    </body>
</html>
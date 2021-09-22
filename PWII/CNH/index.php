<html>
    <head lang="br">
        <title> CNH </title>
        <meta charset="utf-8">
    </head>
    <body>
        <form method="post" action="confirmaridade.php">
            <label>Nome :</label>
            <input type="text" name="txtNome" id="txtNome">
            <label>CPF</label>
            <input tyoe="text" name="txtCPF" id="txtCPF">
            <label>Ano de Nascimneto</label>
            <input type="number" id="nbAnoNasc" name="nbAnoNasc">
            <select name="slcCategoria">
                <option value="1">CAtegoria A - Veículo</option>
                <option value="2">CAtegoria B - Moto</option>
                <option value="3">CAtegoria C - Transporte Remunerado</option>
                <option value="4">CAtegoria D - Caminhão</option>
                <option value="5">CAtegoria E - Ônibus/Mega Camminhão</option>
            </select>
            <input type="submit" value="verificar">
        </form>
    </body>
</html>
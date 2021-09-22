<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salário</title>
</head>
<body>
    <center>
    <form method="post" action="salario.php">
        <label>Insira seu salário</label>
        <input type="text" name="salario">
        <h1>Em que departamento você trabalha?</h1>
        <br>
        
        <input type="radio" id="operacional" name="departamento" value="operacional">
        <label>Operacional</label>
        <br>
        <input type="radio" id="desenvolvimento" name="departamento" value="desenvolvimento">
        <label>Desenvolvimento</label>
        <br>
        <input type="submit" value="APLICAR">
    </form>
    </center>
</body>
</html>
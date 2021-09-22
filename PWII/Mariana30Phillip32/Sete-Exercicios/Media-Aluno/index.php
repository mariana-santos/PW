<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
<center>
    <h1>2.	Desenvolva um programa que leia quatro notas de um aluno, calcule a média aritmética e apresente seu resultado final, conforme abaixo:
<br>0,0 à 4,9 – Aluno retido
<br>5,0 à 6,9 – Aluno em exame
<br>7,0 à 10 – Aluno promovido
</h1>
    <form method="post" action="calcular.php">
        <label>Digite a primeira nota: </label>
        <input type="number" name="nbNumero1" id="nbNumero1">
        <br>
        <label>Digite a segunda nota: </label>
        <input type="number" name="nbNumero2" id="nbNumero1">
        <br>
        <label>Digite a terceira nota: </label>
        <input type="number" name="nbNumero3" id="nbNumero1">
        <br>
        <label>Digite a quarta nota: </label>
        <input type="number" name="nbNumero4" id="nbNumero1">
        <br>
        <input type="submit" name="calcular" value="CALCULAR">
    </form>
    </center>
</body>
</html>
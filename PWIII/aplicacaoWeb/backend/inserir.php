<?php
  require_once('conexao.php');

  header("Location:../index.php");

  $nome = $_POST['nome'];
  $ano = $_POST['ano'];
  $nota = $_POST['nota'];
  $coment = $_POST['comentario'];

  try{
    $stmt = $pdo->prepare("INSERT INTO tbFilme VALUES(null, '$nome','$ano','$nota','$coment')");

    $stmt->execute();

    $pdo = null;

  }catch(PDOException $e){
    echo "Erro: ". $e->getMessage();
  }
?>
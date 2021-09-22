<?php

  include 'conexao.php';
  header("Location:../index.php");
  
  $id = $_POST['id'];

  try{

    $stmt = $pdo->prepare("DELETE FROM tbFilme WHERE idFilme='$id' ");

    $stmt->execute();

    $pdo = null;

  }catch(PDOException $e){
    echo 'Erro ' . $e->getMessage();
  }
?>
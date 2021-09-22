<?php
    include 'conexao.php';

    //header("Location:index.php");

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $ano = $_POST['ano'];
    $nota = $_POST['nota'];
    $coment = $_POST['coment'];

    try{
        $stmt = $pdo->prepare("UPDATE tbFilme
                                    SET nomeFilme='$nome',
                                    anoFilme='$ano',
                                    notaFilme='$nota',
                                    comentFilme='$coment'
                                    WHERE idFilme='$id'");

        $stmt->execute();

        $pdo = null;
    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>
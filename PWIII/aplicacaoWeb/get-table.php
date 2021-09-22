<?php
  include('conexao.php');

  $data = '
  <table id="table">
    <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Comentário</th>
        <th>Nota</th>
        <th>Excluir</th>
    </tr>';

  try{
    $stmt = $pdo->prepare('SELECT * FROM tbFilme');
    $stmt->execute();

    while($row = $stmt->fetch(PDO::FETCH_BOTH)){
      $data+= '<tr>';
        $data+= '<td>'. $row['idFilme'] .'</td>';
        $data+= '<td>'. $row['nomeFilme']. ' ('. $row['anoFilme'].')</td>';
        $data+= '<td>'. $row['comentFilme'] .'</td>';
        $data+= '<td>'. $row['notaFilme'] .'</td>';
      $data+= '<tr>';
    }
  }catch(PDOException $e){
    echo ('Erro: ' . $e->getMessage());
  }
  
  $data += '</table>'

  echo ($data);
?>
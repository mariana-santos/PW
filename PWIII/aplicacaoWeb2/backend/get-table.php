<?php
          include('conexao.php');

          echo '<tr>
                  <th>#</th>
                  <th>Nome</th>
                  <th>Comentário</th>
                  <th>Nota</th>
                  <th>Excluir</th>
                  <th>Editar</th>
                </tr>';

          try{
            $stmt = $pdo->prepare('SELECT * FROM tbFilme');
            $stmt->execute();

            while($row = $stmt->fetch(PDO::FETCH_BOTH)){

              $idFilme = $row["idFilme"];
              $ano = $row['anoFilme'];
              $nome = $row['nomeFilme'];
              $coment = $row['comentFilme'];
              $nota = $row['notaFilme'];

              echo '<tr>';
                echo '<td>'. $idFilme .'</td>';
                echo '<td>'. $nome. ' ('. $ano.')</td>';
                echo '<td>'. $coment .'</td>';
                echo '<td>'. $nota .'</td>';
                echo '<td>';

                //link de exclusão:
                  echo '<a class="excluir" href="javascript:void(0)" id="'.$idFilme.'" data-id="'.$idFilme.'" onclick="excluirFilme(this)" >';
                    echo 'Excluir';
                  echo '</a>';
                echo '</td>';

                //link de alteração
                echo '<td>';
                  echo '<a class="alterar" href="javascript:void(0)" class="update" data-toggle="modal" data-keyboard="false" data-backdrop="static" data-target="#update_country"
                          onclick="updateFilme(this)"
                          data-id="'.$idFilme.'"
                          data-nome="'.$nome.'"
                          data-coment="'.$coment.'"
                          data-nota="'.$nota.'"
                          data-ano="'.$ano.'">';
                    echo 'Editar';
                  echo '</a>';
                echo '</td>';

              echo '<tr>';
            }
          }catch(PDOException $e){
            echo ('Erro: ' . $e->getMessage());
          }
        ?>
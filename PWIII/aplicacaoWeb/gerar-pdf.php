<?php

    include 'pdf-php/src/Cezpdf.php'; 
    include 'backend/conexao.php';

    $data = '                                   Relatório:
    ';

    try{
        $stmt = $pdo->prepare('SELECT * FROM tbFilme');
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_BOTH)){

            $idFilme = $row["idFilme"];
            $ano = $row['anoFilme'];
            $nome = $row['nomeFilme'];
            $coment = $row['comentFilme'];
            $nota = $row['notaFilme'];

            if($row > 0){
                
                $data .=  '
                Filme '. $idFilme .': '. $nome. ' ('. $ano.')
                            Comentário: '. $coment .'
                            Nota: '. $nota .'/10
                            ';

            }else{
                $data .= 'Sem dados ainda :(';
            }

        }
    }catch(PDOException $e){
        echo 'Erro: '.$e->getMessage();
    }

    $m = 117.5;
    // Initialize a ROS PDF class object using DIN-A4, with background color gray
    $pdf = new Cezpdf('a4','portrait','color',[0.8,0.8,0.8]);
    // Set pdf Bleedbox
    $pdf->ezSetMargins($m, $m, $m, $m);
    $mainFont = 'Times-Roman';
    // Select the font
    $pdf->selectFont($mainFont);
    // Define the font size
    $size=12;
    // Modified to use the local file if it can
    $pdf->openHere('Fit');

    $pdf->setLineStyle(1);

    // Output some colored text by using text directives and justify it to the right of the document
    $pdf->ezText("$data", $size);
    
    // Output the pdf as stream, but uncompress
    $pdf->ezStream(['compress'=>0]);
?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicação Web - PW3</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"> </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"> </script>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    
  </head>
  <body>

  <!--HEADER-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PWIII</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#inserir">Inserir</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#table">Dados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#send">Fale conosco</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#chart_div">Estatísticas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#mapa" onclick="initialize()">Visite-nos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <!--Mensagem de ok-->
    <p class="success"></p>

    <!--Forms de Cadastro-->

      <div class="container">
      <div class="box" id="inserir">
          <h1 class="title">Cadastro dos filmes assistidos</h1>
          <img src="img/movie.png" class="icon">

          <form id="form">

            <input type="hidden" name="pegaId" id="pegaId" value="<?php echo @$_GET['idFilme'];?>">
            
            <input type="text" name="nome" id="nome" class="in" placeholder="Nome do filme" required>
            <input type="number" name="ano" id="ano" class="in" placeholder="Ano do filme" max="2050" min="1895" required>
            <input type="number" name="nota" id="nota" class="in" placeholder="Nota do filme (1 a 10)" max="10" min="0" required>
            <textarea name="comentario" id="comentario" placeholder="Comentário descritivo" required rows="2" cols="70" class="in"></textarea>
            <br>

            <input type="button" name="cadastrar" id="cadastrar" class="in btn" value="Cadastrar">

            <a href="gerar-pdf.php" class="gerarpdf" target="_blank" rel="noopener noreferrer">
              <input href="gerar-pdf.php" type="button" class="gerarpdf in btn" name="gerarpdf" id="gerarpdf" class="in btn" value="Gerar PDF">
            </a>
          </form>
        </div>


        <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	      </div>


        <!--tabela de select do banco-->
        <table id="table">
            
        </table>

        <!--Select do banco pras variáveis do gráfico-->
        <?php
          include 'backend/conexao.php';

          try{
            $stmt = $pdo->prepare('SELECT * FROM tbFilme');
            $stmt->execute();

            $g0a3 = 0;
            $g4a6 = 0;
            $g7a10 = 0;

            while($row = $stmt->fetch(PDO::FETCH_BOTH)){
              if($row['notaFilme'] <= 3){
                $g0a3++;
              }else if ($row['notaFilme'] <= 6){
                $g4a6++;
              }else if($row['notaFilme'] <= 10){
                $g7a10++;
              }
            }

          }catch(PDOException $e){
            echo 'Erro: '.$e->getMessage();
          }

        ?>

  </div>
  </div>

  <!-- Modal Update-->
  <div class="modal fade" id="update_country" role="dialog">
		<div class="modal-dialog modal-dialog-centered">
		  <div class="modal-content">
			<div class="modal-header" style="color:#fff;background-color: #e35f14;padding:6px;">
			  <h5 class="modal-title"><i class="fa fa-edit"></i>Editar</h5>
			 
			</div>
			<div class="modal-body">
			
				<!--1-->
				<div class="row">
					<div class="col-md-3">
					    <label>Nome:</label>
					</div>
					<div class="col-md-9">
						<input type="text" name="nome_modal" id="nome_modal" class="form-control-sm" required>
					</div>	
				</div>
			    <!--2-->
				<div class="row">
					<div class="col-md-3">
					    <label>Ano:</label>
					</div>
					<div class="col-md-9">
						<input type="number" name="ano_modal" id="ano_modal" class="form-control-sm" required>
					</div>	
				</div>
			    <!--3-->
				<div class="row">
					<div class="col-md-3">
					    <label>Nota:</label>
					</div>
					<div class="col-md-9">
						<input type="number" name="nota_modal" id="nota_modal" class="form-control-sm" required>
					</div>	
				</div>
				<!--4-->
				<div class="row">
					<div class="col-md-3">
					    <label for="coment-modal">Comentário:</label>
					</div>
					<div class="col-md-9">
						<input type="text" name="coment_modal" id="coment_modal" class="form-control-sm" required>
					</div>	
				</div>
				<input type="hidden" name="id_modal" id="id_modal" class="form-control-sm">
			</div>
			<div class="modal-footer" style="padding-bottom:0px !important;text-align:center !important;">
			<button type="submit" id="update_data" class="btn btn-default btn-sm" style="background-color: #e35f14;color:#fff;">Salvar</button>
			<button type="button" class="btn btn-default btn-sm" data-dismiss="modal" style="background-color: #e35f14;color:#fff;">Fechar</button></p>
			
		  </div>
		  </div>
		</div>
	</div>

<!-- Modal End-->

  <div class="container">

    <!--Envio de e-mail-->
    
      <div class="box" id="send">
        <h1 class="title">Entre em contato conosco!</h1>
        <img src="img/contact.png" class="icon contact">

        <form method="POST" action="email/enviar-email.php">

        <input type="text" name="nomeP" id="nomeP" class="in" placeholder="Seu nome">
        <input type="text" name="email" id="email" class="in" placeholder="E-mail">
        <input type="text" name="assunto" id="assunto" class="in" placeholder="Assunto">
        
        <textarea name="mensagem" id="mensagem" placeholder="Sua mensagem" required rows="2" cols="70" class="in"></textarea>

        <br>

        <input type="submit" name="enviar-email" id="enviar-email" class="in btn" value="Enviar">

        </form>
      </div>

      <div id="chart_div" class="box" style="width: auto;"></div>
    
    </div>

    


  </div>

  </div>


</div>





  </body>

  <footer>
    <div class="container">
            <!--Mapa-->
            
    <div class="mapa" id="mapa" style="width:50%; height:70%"></div>
    </div>
  </footer>

</html>


<!--Chamada do JQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<!--Script do mapa-->
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC7EtEmbMmfL6GtKPeQ7KiaSU9JUaE9F0w&sensor=false" async></script>

<!--Load the AJAX API-->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Classes');
        data.addColumn('number', 'Notas');
        data.addRows([
          ['Classe A: notas de 7 a 10', <?php echo $g7a10?>],
          ['Classe B: notas de 4 a 6', <?php echo $g4a6?>],
          ['Classe C: notas de 0 a 3', <?php echo $g0a3?>]
        ]);

        // Set chart options
        var options = {'title':'Quantas notas tiveram em cada classe:',
                       'width':400,
                       'height':300,
                        backgroundColor: '#BEB7A4',
                        is3D: true};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
        
      }
    </script>

<script>

  function updateFilme(elem) {
    var id = elem.dataset.id;
    var nome = elem.dataset.nome;
    var ano = elem.dataset.ano;
    var nota = elem.dataset.nota;
    var coment = elem.dataset.coment;
    var modal = $('#update_country');

    modal.find('#nome_modal').val(nome);
    modal.find('#ano_modal').val(ano);
    modal.find('#nota_modal').val(nota);
    modal.find('#coment_modal').val(coment);
    modal.find('#id_modal').val(id);
  }

  function excluirFilme(elem){

    var id = elem.dataset.id;

    $('.excluir').click(()=>{

      if(confirm("Deseja realmente excluir o filme?")){
        $.ajax({
          type: "POST",
          url: "backend/excluir.php",
          data:{
				    id,
			    },//fim data
          cache: false,
          success: function(dataResult){
            
            alert('Dados excluídos com sucesso!');
            location.reload();	

            var dataResult = JSON.parse(dataResult);
				    if(dataResult.statusCode==200){
					    $element.fadeOut().remove();
		    		}//fim do if

          }//fim do success
        });//fim ajax
      }else{
        
      }

    });
  
  }

function initialize() {

  var map;
  var chernobyl = new google.maps.LatLng(51.27422325425636, 30.213559779128946);

  var mapOptions = {
    center: new google.maps.LatLng(51.27422325425636, 30.213559779128946),
    zoom: 15,
    mapTypeId: google.maps.MapTypeId.ROADMAP
};
  var map = new google.maps.Map(document.getElementById("mapa"),
  mapOptions);

  var marker = new google.maps.Marker({
      position: new google.maps.LatLng(51.27422325425636, 30.213559779128946), // variável com as coordenadas Lat e Lng
      map: map,
      title: "Chernobyl"
  });
}

  $(document).ready(function() {

    initialize();

    //atualizar tabela
    $.ajax({
      url: "backend/get-table.php",
		  type: "GET",
		  cache: false,
		  success: function(dataResult){
			  $('#table').html(dataResult); 
		  }//fim success
    });//fim atualização tabela

    //Alterando com ajax
    $(document).on("click", "#update_data", function(e) { 
      e.target.disabled = true;

      var id = $('#id_modal').val();
      var nome = $('#nome_modal').val();
      var ano = $('#ano_modal').val();
      var nota = $('#nota_modal').val();
      var coment = $('#coment_modal').val();

      $.ajax({
        url: "backend/alterar.php",
        method: "POST",
        cache: false,
        catch: false,
        data:{
          id,
          nome,
          ano,
          nota,
          coment,
          update: 1
        },//fim data

        success: function(dataResult) {
          location.reload();
        }

      });//fim ajax
    });//fim da ação de clique no botao salvar

    //ação de clique de cadastrar
    $('#cadastrar').on('click', function() {
      var nome = $('#nome').val();
      var ano = $('#ano').val();
      var nota = $('#nota').val();
      var comentario = $('#comentario').val();

      var data = {
          nome: nome,
          ano: ano,
          nota: nota,
          comentario: comentario
        };//fim dos dados

        //if de validação dos dados
        if(nome!="" && nota!=""){

          //inserindo com AJAX
          $.ajax({
            url: "backend/inserir.php",
            type: "POST",
            data: data,
            cache: false,
            success: function(data){
                $('#form').find('input:text').val('');
                alert('Dados inseridos com sucesso!');
                location.reload();	
            }//fim do success
          });//fim do ajax
      }//fim do if

      else{
        alert('Please fill all the field !');
      }//fim do else validação

    });//fim ação de clique do cadastro


    //Excluindo com AJAX
    $('.excluir').click(function(){
      
      var element = $('this').parent().parent();
      var id = element.attr('id');

      console.log(element);
      console.log(id);

      //alert de confirmação
      if(confirm("Deseja realmente excluir o filme?")){
        $.ajax({
          type: "POST",
          url: "backend/excluir.php",
          data:{
				    id: id
			    },//fim data
          cache: false,
          success: function(dataResult){
            
            alert('Dados excluídos com sucesso!');
            location.reload();	

            var dataResult = JSON.parse(dataResult);
				    if(dataResult.statusCode==200){
					    $element.fadeOut().remove();
		    		}//fim do if

          }//fim do success
        });//fim ajax
      }//fim alert de confirmação
      
    });//fim do clique de excluir

  });//fim document ready function
</script>
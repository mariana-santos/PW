<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php
            include_once("valida-sentinela.php");
        ?>
        
        

        <nav class="navbar navbar-light bg-light">
            <a class="anav" id="navv" style="font-family: palatino linotype; font-size: 150%;margin: 0 auto;">
            <img src="../img/logo.png" width="35" height="35" class="d-inline-block align-top" alt="" loading="lazy">
            Central de Boas Notícias
            <img src="../img/logo.png" width="35" height="35" class="d-inline-block align-top" alt="" loading="lazy">
            </a>
        </nav>
        <ul class="nav justify-content-center navbar-light bg-light">
            <li class="nav-item">
              <a class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Fale conosco</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre nós</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../sair.php">Sair</a>
              </li>
          </ul>


          <div class="container" style="margin-top: 1%; margin-bottom: 1%;">
              <div class="row">
                    <div class="col-4">
                        <div class="card mb-3">
                            <img src="../img/cf303-_inspiracao-pai-_filho-banho-620x437.jpg" class="card-img-top">
                            <div class="card-body">
                              <h5 class="card-title">Sociedade</h5>
                              <p class="card-text">Mais da metade dos pais afirmam ter se aproximado dos filhos por causa a quarentena</p>
                              <a href="https://www.metropoles.com/vida-e-estilo/comportamento/maioria-dos-pais-diz-ter-se-aproximado-dos-filhos-na-quarentena" class="btn btn-primary">Ler mais</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-4">
                        <div class="card mb-3">
                            <img src="../img/14-1-600x450-600x437.jpg" class="card-img-top">
                            <div class="card-body">
                              <h5 class="card-title">Internacional</h5>
                              <p class="card-text">Taxista Indiano ganha carro personalizado como agradecimento por ajudar pessoas em situações de emergência</p>
                              <a href="https://jornaldeboasnoticias.com.br/taxista-indiano-de-75-anos-ganha-carro-personalizado-como-agradecimento-por-ajudar-pessoas-em-situacoes-de-emergencia/" class="btn btn-primary">Ler mais</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-4">
                        <div class="card mb-3">
                            <img src="../img/cdc-ifpqtennlj8-unsplash.jpg" class="card-img-top">
                            <div class="card-body">
                              <h5 class="card-title">Ciência</h5>
                              <p class="card-text">Teste em humanos de vacina contra coronavírus tem resultados positivos preliminares, diz empresa</p>
                              <a href="https://g1.globo.com/bemestar/coronavirus/noticia/2020/05/18/teste-de-vacina-contra-coronavirus-em-humanos-tem-resultados-positivos-preliminares-diz-empresa.ghtml" class="btn btn-primary">Ler mais</a>
                            </div>
                          </div>
                    </div>
              </div>

              <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                          <p class="card-text">Adolescente de Campinas cria canudo biodegradável, comestível e maleável</p>
                          <a href="https://g1.globo.com/sp/campinas-regiao/noticia/2018/10/02/adolescente-de-campinas-cria-canudo-biodegradavel-comestivel-e-maleavel-a-base-de-inhame.ghtml" class="btn btn-primary">Ler mais</a>
                        </div>
                      </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                          <p class="card-text">Nova Zelândia venceu uma batalha contra o coronavírus, afirma primeira-ministra</p>
                          <a href="https://istoe.com.br/nova-zelandia-venceu-uma-batalha-contra-o-coronavirus-afirma-primeira-ministra/" class="btn btn-primary">Ler mais</a>
                        </div>
                      </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                          <p class="card-text">Pais pintam casa com ‘A Noite Estrelada’ para que filho autista não se perca</p>
                          <a href="https://www.bbc.com/portuguese/geral-44911354" class="btn btn-primary">Ler mais</a>
                        </div>
                      </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                          <p class="card-text">Moradores de rua de SP receberam atendimento médico neste domingo</p>
                          <a href="https://noticias.r7.com/sao-paulo/moradores-de-rua-de-sp-recebem-atendimento-medico-neste-domingo-01062020" class="btn btn-primary">Ler mais</a>
                        </div>
                      </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                          <p class="card-text">Florianópolis segue sem mortes por coronavírus há 25 dias</p>
                          <a href="https://g1.globo.com/sc/santa-catarina/noticia/2020/05/30/florianopolis-segue-sem-mortes-por-coronavirus-ha-25-dias.ghtml" class="btn btn-primary">Ler mais</a>
                        </div>
                      </div>
                </div>
              </div>
          </div>
        

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


    </body>
</html>
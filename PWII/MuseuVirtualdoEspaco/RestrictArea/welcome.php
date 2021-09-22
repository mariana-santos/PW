<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css" type="text/css"/>
        <title>Seja bem-vindo(a)!</title>
    </head>
    <body id="bodyWelcome">
    <?php include_once("sessionVerify.php"); ?>
        <div id="imgWelcome">
            <div id="iconWelcome">
                <img src="../icons/icon1Color.png">
            </div>
            <h3 class="exit"><a href="../logout.php">Sair</a></h3>
            <h1 class="txtWelcomeBg">Seja bem vindo, <?php echo ucfirst($_SESSION['usernameSession']); ?>!</h1>
            <br>
            <p class="txtWelcome">Aqui, você encontrará algumas exposições. Aproveite a estadia.</p>
        </div>

        <div id="bgInfo">
            <div class="iconCenter"><img src="../icons/icon2.png"></div>
            <p id="desc"> Participe conosco dessa jornada com uma viagem explorando <br>
                toda a nossa história intergalática, podendo saber de tudo por trás <br>
                de grandes marcos da nossa história com imagens exclusivas!</p>
        </div>

        <div class="bgDetails">

            <div class="img" id="ft1"></div>

            <div class="descImg">
                <h1 class="titleImgs">Primeiro Traje</h1>
                <p class="txtImgs">Apesar de inventores autônomos começarem a desenvolver roupas espaciais já na década de 1930,
                    somente em 1961, durante a corrida espacial que marcou a Guerra Fria,
                    que o primeiro traje foi usado por um homem no espaço. 
                    O cosmonauta russo Yuri Gagarin vestiu o SK-1 em 12 de abril, no primeiro voo tripulado por um ser humano,
                    a bordo da aeronave Vostok 1.</p>
                <p class="txtImgs">Criado pela empresa Zvezda, o modelo foi desenhado especificamente
                    para o piloto e usado em outros voos da missão Vostok até 1963.
                    A camada externa laranja era feita de nylon e o modelo, inteiriço - 
                    nem mesmo o capacete podia ser removido. Quanto à questão de sobrevivência de Gagarin,
                    o SK-1 contava com um colar de borracha inflável (para o caso de pouso na água),
                    um forro de pressão com conectores de suporte à vida e mangueiras de comunicação.</p>
            </div>

        </div>

        <div class="bgWhite">

            <div class="descImg">
                <h1 class="titleImgs">Sputnik</h1>
                <p class="txtImgs" id="txtInvert">O dia quatro de outubro de 1957 foi um marco para história mundial. 
                Nesta data, a União Soviética colocou o satélite Sputnik em órbita. 
                Este foi o primeiro satélite artificial lançando ao espaço.</p>
                <p class="txtImgs" id="txtInvert">Como outros projetos seriam lançados posteriormente,
                esse satélite ficou conhecido como Sputnik I. 
                O Sputnik era bem simples, sua finalidade era apenas transmitir um sinal de rádio que fazia um “beep” 
                e podia ser escutado pelos aparelhos de radio amador no mundo todo.</p>
                <p class="txtImgs" id="txtInvert">Após vinte e dois dias de funcionamento, 
                as baterias do transmissor acoplado no satélite se esgotaram, mas o Sputnik I conseguiu ficar na 
                órbita terrestre por seis meses antes de cair. Apesar da simplicidade do projeto, 
                o Sputnik I auxiliou estudiosos de astronomia na identificação das camadas da alta atmosfera da Terra.</p>
            </div>

            <div class="img" id="ft2"></div>

        </div>

        <div class="bgDetails">
            <div class="img" id="ft3"></div>

            <div class="descImg">
                <h1 class="titleImgs">Primeiro Ônibus Espacial</h1>
                <p class="txtImgs">O ônibus espacial (space shuttle) foi um sofisticado veículo parcialmente 
                reutilizável usado pela NASA como veículo lançador de satélites, nave para suas missões tripuladas
                de reparos de aparelhos em órbita no espaço e reabastecimento da Estação Espacial Internacional.
                Ele tornou-se o sucessor da nave Apollo usada durante o Projeto Apollo. 
                O ônibus espacial foi lançado pela primeira vez em 1981 e realizou sua última missão em 2011. 
                Eles foram usados em um total de 135 missões desde 1981 até 2011, todos sendo lançados
                do Centro Espacial John F. Kennedy, na Flórida. </p>
                <p class="txtImgs">Nas suas missões foram lançados inúmeros satélites,
                sondas interplanetárias, e o Telescópio espacial Hubble;
                também realizou experimentos científicos em órbita e participou da construção e manutenção
                 da Estação Espacial Internacional. No tempo total, a frota de ônibus realizou 1322 dias,
                19 horas, 21 minutos e 23 segundos de missões espaciais.</p>

            </div>
        </div>

        <footer>
            <div id="iconFooter">
                <img src="../icons/icon1Color.png">
            </div>
        </footer>

    </body>
</html>
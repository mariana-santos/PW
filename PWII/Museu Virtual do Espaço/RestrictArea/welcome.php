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
            <p id="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, <br>
                illum et ex tempore, dicta possimus doloremque ipsa velit delectus, unde <br>
                voluptatum officiis non totam quod! Doloremque aliquam vitae illum inventore.</p>
        </div>

        <div class="bgDetails">

            <div class="img" id="ft1"></div>

            <div class="descImg">
                <h1 class="titleImgs">Primeiro Traje</h1>
                <p class="txtImgs">Em 1988 etc etc etc consectetur adipisicing elit. 
                    Repudiandae molestias earum odit facere autem, quo culpa 
                    consequatur, eligendi consequuntur, quisquam exercitationem. 
                    Pariatur iusto omnis veniam recusandae explicabo, tempore 
                    mollitia cumque.</p>
                <p class="txtImgs">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Repudiandae molestias earum odit facere autem, quo culpa 
                    consequatur, eligendi consequuntur, quisquam exercitationem. 
                    Pariatur iusto omnis veniam recusandae explicabo, tempore 
                    mollitia cumque.</p>
                <p class="txtImgs">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Repudiandae molestias earum odit facere autem, quo culpa. Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Repudiandae molestias earum odit facere autem, quo culpa.</p>
            </div>

        </div>

        <div class="bgWhite">

            <div class="descImg">
                <h1 class="titleImgs">Sputnik</h1>
                <p class="txtImgs" id="txtInvert">Em 1988 etc etc etc consectetur adipisicing elit. 
                    Repudiandae molestias earum odit facere autem, quo culpa 
                    consequatur, eligendi consequuntur, quisquam exercitationem. 
                    Pariatur iusto omnis veniam recusandae explicabo, tempore 
                    mollitia cumque.</p>
                <p class="txtImgs" id="txtInvert">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Repudiandae molestias earum odit facere autem, quo culpa 
                    consequatur, eligendi consequuntur, quisquam exercitationem. 
                    Pariatur iusto omnis veniam recusandae explicabo, tempore 
                    mollitia cumque.</p>
                <p class="txtImgs" id="txtInvert">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Repudiandae molestias earum odit facere autem, quo culpa. Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Repudiandae molestias earum odit facere autem, quo culpa.</p>
            </div>

            <div class="img" id="ft2"></div>

        </div>

        <div class="bgDetails">
            <div class="img" id="ft3"></div>

            <div class="descImg">
                <h1 class="titleImgs">Primeiro Ônibus Espacial</h1>
                <p class="txtImgs">Em 1988 etc etc etc consectetur adipisicing elit. 
                    Repudiandae molestias earum odit facere autem, quo culpa 
                    consequatur, eligendi consequuntur, quisquam exercitationem. 
                    Pariatur iusto omnis veniam recusandae explicabo, tempore 
                    mollitia cumque.</p>
                <p class="txtImgs">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Repudiandae molestias earum odit facere autem, quo culpa 
                    consequatur, eligendi consequuntur, quisquam exercitationem. 
                    Pariatur iusto omnis veniam recusandae explicabo, tempore 
                    mollitia cumque.</p>
                <p class="txtImgs">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Repudiandae molestias earum odit facere autem, quo culpa. Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Repudiandae molestias earum odit facere autem, quo culpa.</p>
            </div>
        </div>

        <footer>
            <div id="iconFooter">
                <img src="../icons/icon1Color.png">
            </div>
        </footer>

    </body>
</html>
            var nome, n1, n2, n3, n4, media;
            nome = prompt("Digite seu nome");
            n1 = parseFloat(prompt("Digite a primeira nota"));            
            n2 = parseFloat(prompt("Digite a segunda nota"));
            n3 = parseFloat(prompt("Digite a terceira nota"));
            n4 = parseFloat(prompt("Digite a quarta nota"));
            media = (n1 + n2 + n3 + n4)/4;
            document.write("Seu nome é "+nome+" e sua média foi "+ media +".");
            document.write ("<br>");
            if(media <= 3){
                document.write("Você foi retido! :(");
                document.write ("<br>");
            }else if (media >= 3.1 && media <= 5.9){
                document.write("Você está em exame!");
                document.write ("<br>");
            }else{
                document.write("Você foi promovido! :)");
                document.write ("<br>");
            }
            var salb, sall;
            sal = parseFloat(prompt("Digite o seu salário"));
            document.write("Salário bruto: "+sal);
            document.write ("<br>");
            if(sal <= 1751.82){
                sall = sal - (sal * 8)/100;
                document.write("Desconto: "+(sal * 8)/100);
                document.write ("<br>");
            }else if(sal >= 1751.82 && sal <= 2919.72){
                sall = sal - (sal * 9)/100;
                document.write("Desconto: "+(sal * 9)/100);
                document.write ("<br>");
            }else {
                sall = sal - (sal * 11)/100;
                document.write("Desconto: "+(sal * 11)/100);
                document.write ("<br>");
            }
            document.write("Salário líquido: "+sall);
            document.write ("<br>");
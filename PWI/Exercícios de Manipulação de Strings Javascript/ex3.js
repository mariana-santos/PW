var nome;
nome = prompt("Digite seu nome e sobrenome");

var index = nome.indexOf(" ");

//indica o index do começo do sobrenome
index = index + 1;

var sobrenome = nome.slice(index, nome.length);
sobrenome.toLowerCase();

var letra = nome.charAt(0);

var senha = letra + "." + sobrenome;
document.write("Login: "+nome+"<br>");
document.write("Senha: "+ senha.toLowerCase());

/*document.write(nome.charAt(0));
document.write(".");
document.write(sobrenome.toLowerCase);*/


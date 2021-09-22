var fat = 1;
var num = parseInt(prompt("Digite um número: "));

for(var x = 1; x <= num; x++)
{
  fat = fat * x;
}

document.write("Fatorial de "+num+": "+fat);
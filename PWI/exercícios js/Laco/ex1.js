var base, exp, r = 0;
base = parseInt ( prompt("Digite a base do número"));
exp = parseInt ( prompt("Digite o expoente do número"));
for(var i = 1; i < exp; i++){
    r += base * base;
}
document.write(base + " elevado a "+ exp +": "+r);
document.write ("<br>");




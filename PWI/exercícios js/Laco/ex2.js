var bef, bef2, next;
bef = 1;
bef2 = 1;
var n = parseInt (
    prompt("Digite o último valor a ser apresentado da sequência de Fibonacci")
);
document.write(bef + " "+ bef2+ " ");
for(var i = 1; i != n; i++){
    next = bef + bef2;
    if(next <= n){
    document.writeln(" " + next);
}
    bef2 = bef;
    bef = next;
}
document.write ("<br>");

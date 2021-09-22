var string = "etecGu";
var i;
document.write(string.indexOf("G")+ "<br>");
document.write(string.slice(4, 6) + "<br>");
document.write(string.substring (0, 4) + "<br>");

for(i = 0; i <= string.length; i++){
    document.write( string.slice (0, i)
    );
    document.write("<br>");
}

for(i = string.length; i >=0; i--){
    document.write( string.slice (0, i)
    );
    document.write("<br>");
}
var string;
string = prompt("Digite uma frase");
var i;
string = string.toLowerCase();
var n = 0;


for(i = 0; i <= string.length; i++){
    switch(string.charAt(i)){
        case " ":
            string = string.replace(" ","");
        break;
    }
}
alert(string);
var subtotal = 0;
function salvar(){
    var nome = document.getElementById("txtnome").value;
    document.getElementById('txtnomeCliente').value = nome;

    var cpf = document.getElementById('txtcpf').value;
    document.getElementById('txtcpfCliente').value = cpf;

    var cidade = document.getElementById('txtcidade').value;
    document.getElementById('txtcidadeCliente').value = cidade;

    var endereco = document.getElementById('txtende').value;
    document.getElementById('txtendeCliente').value = endereco;

    var email = document.getElementById('txtemail').value;
    document.getElementById('txtemailCliente').value = email;

    var a = document.getElementsByName("fretee");
    for(var i=0;i < a.length;i++){
        if(a[i].checked == true)break;
    }
    if(a[i].value == '1'){
        document.getElementById("pagCliente").value = "Esperando a retirada"
    }else if(a[i].value == '2'){
        document.getElementById("pagCliente").value = "SEDEX - 5 a 7 dias"
        subtotal += 25
    }
    else if(a[i].value == '3'){
        document.getElementById("pagCliente").value = "Correios - 7 a 11 dias"
        subtotal += 10
    }
    
    var parcela = document.getElementById("par");
    var parSelec = parcela.options[parcela.selectedIndex].text;
    document.getElementById("parcelaCliente").value = parSelec;
    

    
}
function add(){
    var tabela = document.getElementById('table');
    var td1 = document.createElement("td");
    var td2 = document.createElement("td");
    var td3 = document.createElement("td");
    var tr = document.createElement("tr");

    var qtde = Number(document.getElementById("txtQtde").value);
    var cod = Number(document.getElementById("txtcod").value)

    if(qtde == "" ){
        alert("Selecione uma quatidade")
    }
    if(cod === 1){
        var titulo = "A divina Comédia";
        var valor = Number(39.99);
         subtotal += valor * qtde;
    }
    else if(cod === 2){
        var titulo = "Os Lusíadas";
        var valor = Number(34.99);
         subtotal += valor * qtde;
    }
    else if(cod === 3){
        var titulo = "Dom Quixote";
        var valor = Number(49.99);
         subtotal += valor * qtde;
    }
    else if(cod === 4){
        var titulo = "Dom Casmurro";
        var valor = Number(49.99);
         subtotal += valor * qtde;
    }
    else if(cod === 5){
        var titulo = "Odisséia";
        var valor = Number(24.99);
         subtotal += valor * qtde;
    }
    else if(cod === 6){
        var titulo = "Cidades de Papel";
        var valor = Number(19.99);
         subtotal += valor * qtde;
    }
    else if(cod === 7){
        var titulo = "Como eu era antes de vc";
        var valor = Number(30.99);
         subtotal += valor * qtde;
    }
    else if(cod === 8){
        var titulo = "Quem é você, Alaska?";
        var valor = Number(39.99);
         subtotal += valor * qtde;
    }
    else if(cod === 9){
        var titulo = "Zac e Mia";
        var valor = Number(14.99);
         subtotal += valor * qtde;
    }
    else if(cod === 10){
        var titulo = "Querido John";
        var valor = Number(28.99);
         subtotal += valor * qtde;
    }
    else if(cod === 11){
        var titulo = " Watchmen ";
        var valor = Number(19.99);
         subtotal += valor * qtde;
    }
    else if(cod === 12){
        var titulo = " Homem-Aranha ";
        var valor = Number(14.99);
         subtotal += valor * qtde;
    }
    else if(cod === 13){
        var titulo = " Teen Titans ";
        var valor = Number(29.99);
         subtotal += valor * qtde;
    }
    else if(cod === 14){
        var titulo = " Deadpool X-men ";
        var valor = Number(17.70);
         subtotal += valor * qtde;
    }
    else if(cod === 15){
        var titulo = "Batman";
        var valor = Number(27.87);
         subtotal += valor * qtde;
    }
    else if(cod === 16){
        var titulo = " O Pequeno Príncipe ";
        var valor = Number(14.99);
         subtotal += valor * qtde;
    }
    else if(cod === 17){
        var titulo = " O Patinho Feio ";
        var valor = Number(24.99);
         subtotal += valor * qtde;
    }
    else if(cod === 18){
        var titulo = "Cinderela";
        var valor = Number(29.99);
         subtotal += valor * qtde;
    }
    else if(cod === 19){
        var titulo = "Almanaque";
        var valor = Number(35.90);
         subtotal += valor * qtde;
    }
    else if(cod === 20){
        var titulo = " O Vírus Vilão ";
        var valor = Number(19.89);
         subtotal += valor * qtde;
    }
    else if(cod === 21){
        var titulo = " Vingadores - Ultimato ";
        var valor = Number(49.99);
         subtotal += valor * qtde;
    }
    else if(cod === 22){
        var titulo = " John Wick 3 ";
        var valor = Number(29.99);
         subtotal += valor * qtde;
    }
    else if(cod === 23){
        var titulo = " Toy Story 4 ";
        var valor = Number(37.99);
         subtotal += valor * qtde;
    }
    else if(cod === 24){
        var titulo = " Turma da Mônica: Laços ";
        var valor = Number(27.95);
         subtotal += valor * qtde;
    }
    else if(cod === 25){
        var titulo = " Bacurau ";
        var valor = Number(23.87);
         subtotal += valor * qtde;
    }
    else if(cod === 1000){
        var titulo = "  A República  ";
        var valor = Number(14.99);
         subtotal += valor * qtde;
    }
    else if(cod === 0100){
        var titulo = " O mínimo que você precisa saber para não ser um idiota  ";
        var valor = Number(59.99);
         subtotal += valor * qtde;
    }
    else if(cod === 0010){
        var titulo = " O Homem sem Qualidades ";
        var valor = Number(89.99);
         subtotal += valor * qtde;
    }
    else if(cod === 0001){
        var titulo = " Rápido e devagar ";
        var valor = Number(59.99);
         subtotal += valor * qtde;
    }
    else if(cod === 1111){
        var titulo = " O poder da ação ";
        var valor = Number(11.99);
         subtotal += valor * qtde;
    }
   if(cod == ""){
       alert("Selecione um produto")
   }

   var a = document.getElementsByName("fretee");
    for(var i=0;i < a.length;i++){
        if(a[i].checked == true)break;
    }
    if(a[i].value == '1'){
        document.getElementById("pagCliente").value = "Esperando a retirada"
    }else if(a[i].value == '2'){
        document.getElementById("pagCliente").value = "SEDEX - 5 a 7 dias"
        subtotal += 25
    }
    else if(a[i].value == '3'){
        document.getElementById("pagCliente").value = "Correios - 7 a 11 dias"
        subtotal += 10
    }

    var parcela = document.getElementById("par");
    var parSelec = parcela.options[parcela.selectedIndex].text;
    var valParcela = subtotal;
    if(parcela.options[parcela.selectedIndex].text == '1x - 10% de desconto'){
        subtotal = subtotal-(subtotal*0.1);
        valParcela = subtotal;
    }
    else if(parcela.options[parcela.selectedIndex].text == '2x'){
        valParcela /= 2;
    }
    else if(parcela.options[parcela.selectedIndex].text == '3x'){
        valParcela /= 3;
    }
    else if(parcela.options[parcela.selectedIndex].text == '4x'){
        valParcela /= 4;
    }
    else if(parcela.options[parcela.selectedIndex].text == '5x'){
        valParcela /= 5;
    }
    else if(parcela.options[parcela.selectedIndex].text == '6x'){
        valParcela /= 6;
    }
    else if(parcela.options[parcela.selectedIndex].text == '7x'){
        valParcela /= 7;
    }
    else if(parcela.options[parcela.selectedIndex].text == '8x'){
        valParcela /= 8;
    }
    else if(parcela.options[parcela.selectedIndex].text == '9x'){
        valParcela /= 9;
    }
    else if(parcela.options[parcela.selectedIndex].text == '10x'){
        valParcela /= 10;
    }

    
    document.getElementById("parcelaCliente").value = parSelec;

    var descricaoNode = document.createTextNode(titulo);
    var precoNode = document.createTextNode(valor);
    var qtdeNode = document.createTextNode(qtde);

    td1.appendChild(descricaoNode);
    td2.appendChild(precoNode);
    td3.appendChild(qtdeNode);

    tr.appendChild(td1);
    tr.appendChild(td2);
    tr.appendChild(td3);

    tabela.appendChild(tr);

    document.getElementById('txtcod').value = '';
    document.getElementById('txtQtde').value = '';
    document.getElementById('txtcod').focus();
    var arredondado = parseFloat(subtotal.toFixed(2));
    var arredondado2 = parseFloat(valParcela.toFixed(2));
    document.getElementById("valParcelaCliente").value = arredondado2;
    document.getElementById('txtsubtotal').value = arredondado;



    

}



function carregarDados(){

    //xhr: XMLHttpRequest
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function(){
        if(xhr.readyState === 4 && xhr.status === 200){

            document.getElementById('dados').innerHTML = formataDados(xhr.responseText);

        }
    }

    xhr.open("GET", "lista.json", true);
    xhr.send();
}

function formataDados(strDados){

    //Converte o arquivo JSON em um objeto Javascript
    var objDados = JSON.parse(strDados);
    var linhasTabela = '';

    for(la of objDados['listadeAlunos']){

        linhasTabela += '<tr>' +
            '<th scope="row">' + la['id'] + '</th>' +
            '<td>' + la['nome'] + '</td>' +
            '<td>' + la['idade'] + '</td>' +
            '<td>' + la['email'] + '</td>' +

        '</tr>';
    }

    return linhasTabela;
}
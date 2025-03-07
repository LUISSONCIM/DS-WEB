function transformar (){
    var numero = Number.parseFloat(document.getElementById("Numero").value);
    var porcentagem = document.getElementById("porcentagem").value;
    var resultado = (numero * (porcentagem/100)) + numero;
    document.getElementById("Result").innerHTML = "resultado "+ resultado;
    //document.getElementById("Result").innerHTML = "porcentagem "+ numero;
    
}

 
function Verificação(){
    var numero = document.getElementById("Numero").value;
    var numero = Number.parseInt(numero)
    var resultado = numero % 2 == 0 ? "seu numero é par" : "seu numero é impar"

    
    document.getElementById("concluido").innerHTML = resultado
}
 
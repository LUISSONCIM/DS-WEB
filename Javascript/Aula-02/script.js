window.document.write(window.document.url);


var p1 = window.document.getElementsByName('p')[0]
window.document.write(p1.innerText)

var classes = document.getElementsByClassName("exemplo");
classes[0].innerHTML = "Hello Word";

document.getElementById("teste").innerHTML = "Hello Word";

document.querySelector("p").style.backgroundColor = "red"
document.querySelector("p#paragrafo").style.backgroundColor = "blue"

alert("Você clicou no botão");

function calcular(){
    var numero1 = document.getElementById("numero1").value;
    var numero2 = document.getElementById("numero2").value;

    //Convertendo numeros
    console.log(typeof numero1);
    var resultado = numero1 + numero2;


    document.getElementById("resultado").innerHTML = "Resultado:" + resultado;

}

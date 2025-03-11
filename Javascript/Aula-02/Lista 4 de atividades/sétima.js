function verificartriangulos(){
var lados1 = Number(prompt("Insira primeiro lado de um triangulo"))
var lados2 = Number(prompt("Insira segundo lado de um triangulo"))
var lados3 = Number(prompt("Insira terceiro lado de um triangulo"))

if(lado1 + lado2 > lado3 && lado1 + lado3 > lado2 + lado3 > lado1){
alert("Triangulo valido");

}

if (lado1 === lado2 && lado2 === lado3){
} else {
    alert("Triangulo equilatero");

}

}

verificartriangulos();

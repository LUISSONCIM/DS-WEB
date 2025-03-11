function Concluido(){
    var nome = document.getElementById("nome").value;
    document.getElementById("Result").innerHTML = "Boa sorte " + nome;

}

function Deletar(){
    var nome = document.getElementById("nome").value;
    document.getElementById("Result").innerHTML = "Boa sorte " + nome;
}

function cor(){


   var div = document.createElement("div");
   div.style.widh = "200px";
   div.style.height = "600px";
   div.style.background = "black";
   div.style.color= "red";
   div.innerHTML = "Luisão";
   document.appendChild(div);

}
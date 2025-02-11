<?php

class Videogame {

//Atributo:
public $nome;

public $preço;

public $controle;

public $empresa;

public $cor;

  
  

//Método
public function ligar(){
    return "O meu nome é" .$this->nome;
}
public function desligar(){
    return "O meu preço é" .$this->preço;
}
public function  repouso(){
    return "A minha empresa é" .$this->empresa;
}


}

$console = new Videogame(); //Inicio do Objeto
$console ->nome = "PS5"
$console ->preço = "R$ 3000,00"
$console ->controle = "Dualsense"
$console ->empresa = "Sony"
$console ->cor = "Branco"
echo $console->ligar(); //Exibindo um atributo
echo '<br>'
echo $console->desligar(); //Exibindo outro atributo
echo '<br>'
echo $console->repouso(); //Exibindo um atributo
echo '<br>'





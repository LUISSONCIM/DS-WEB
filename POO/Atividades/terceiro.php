<?php
class Veiculo{

public $marca = "Lamborghini";
public $modelo = "GT";
public $velocidade = "257 km/h";

function definirVelocidade(){
}

}

class Moto extends Veiculo {
    public function acelerar(){

}
}

class Carro extends Veiculo {
    public function acelerar(){

}
}
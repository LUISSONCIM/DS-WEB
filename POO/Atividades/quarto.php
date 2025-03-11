<?php
abstract class Produto{
    public $nome = "Controle";
    public $preco = "388,00";
    public $estoque = "20 unidades";

}
    class Eletronico extends Produto{
    public function  calcularDesconto(){

    }

}
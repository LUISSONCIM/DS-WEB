<?php
abstract class Animal{
    public function fazerSom(){}

}
    class Gato extends Animal{
    public function fazerSom(){
        echo "Comer";          
        
    }
}
$Gato = new Gato();
$Gato -> fazerSom();

?>
<?php

class Pessoa {
    public $nome;

    protected $idade;

    public function verDados(){
    
    echo $this->nome;
    "<br/>";
    echo $this->idade; 
    "<br/>"; 
    
}
}


   class Funcionário {

    protected $salario;


    public function verDados(){
        //Exibe a situaçâo atual

        echo get_class($this)
        "<br>"

        echo $this->nome
        echo $this->idade

        
        }
    }
    
    class Pessoa extends Funcionário{

        public function verDados(){

         //Exibe a classe atual

         echo get_class($this). "<br/>";

         echo $this->nome. "<br/>";
         echo $this->idade. "<br/>";

        }
    }

   class Desenvolvedor extends Funcionário{
        public function verDados(){

            //é exibido a classe atual

            echo get_class($this). "<br/>";

            echo $this->nome. "<br/>";
            echo $this->idade. "<br/>";

        }
        }
        function CalcularBonus()
        
        $Luis -> Desenvolvedor
        $Luis = 151,80
        

        $Scudeler -> Gerente
        $Scudeler = 303,60

      
   
   ?>

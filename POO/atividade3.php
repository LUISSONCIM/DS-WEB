<?php

class ContaBancaria {
    public $saldo;
    public $numeroConta;
    public $titular;


    public function exibirSaldo(){
        return "O saldo é: R$" .$this->saldo. ",00";
    }
    public function depositar($deposito){
        $this->saldo += $deposito;

    }
    public function sacar($saque){
        $this->saldo -= $saque;
        return "Este é o novo saldo" .$this->saldo;
    }

    }

$contaLuis = new ContaBancaria();
$contaLuis->saldo = 50;
$contaLuis->numeroConta = 12312424;
$contaLuis->titular = "Luis";

echo "Titular da conta:".$contaLuis->titular;
echo '<br>';
echo $contaLuis->exibirSaldo();
echo '<br>';
echo $contaLuis->sacar(20);

<?php
$host = 'localhost';
$usuario = 'root';
$senha = 'usbw';
$banco = 'floricultura';


//Conectar-se ao banco de dados
$conexao = mysqli_connect($host, $usuario, $senha, $banco);
//Verificar se a conexão foi bem sucedida
if (!$conexao) {
    die('Erro na coexão: ' . mysqli_connect_error());
}
echo "Conexão bem sucedida!";

?>
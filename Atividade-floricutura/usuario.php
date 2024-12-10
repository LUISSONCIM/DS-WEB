<?php
//Inluo a minha conexão com o banco de dados
include_once('connection.php');

$usuarios = $_POST['usuarios'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = ['senha'];



//Inico da Inserção do banco de dados
$sql = "INSERT INTO usuarios (ID, nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if(mysqli_query($conexao, $sql)) {
    echo "Novo registro inserido com sucesso!";
    header('Location: index.php');
    } else {
    echo "Erro ao inserir: " . mysqli_error($conexao);
    
    }
    
    ?>
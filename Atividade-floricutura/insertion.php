<?php
//Inluo a minha conexão com o banco de dados
include_once('connection.php');

$produtos = $_POST['produtos'];
$nome = $_POST['nome'];
$descricao = $_POST['descrição'];
$preco = $_POST['preço'];


//Inico da Inserção do banco de dados
$sql = "INSERT INTO produtos (nome, descrição, preço) VALUES ('$nome', '$descrição, '$preço')";
if(mysqli_query($conexao, $sql)) {
    echo "Novo registro inserido com sucesso!";
    header('Location: index.php');
    } else {
    echo "Erro ao inserir: " . mysqli_error($conexao);
    
    }
    
    ?>
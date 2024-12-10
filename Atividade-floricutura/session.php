<?php
session_start();

$_SESSION['login'] = 'João';
$_SESSION['produtos'] = 'macarrão';

echo "Sessão criada com sucesso!";
header('Location: index.php');

?>
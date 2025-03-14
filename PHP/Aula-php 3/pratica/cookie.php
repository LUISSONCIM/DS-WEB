<?php
session_start();
$loginCerto = 'LUIS';
$senhaCerto = '69325';
// Verificando se já existe
session_destroy(): bool

session_start();
$loginCerto = 'luis';
$senhaCerto = '436';
//Verifica se veio do Formulário
if(isset($_POST['login'])){
    //Verifica

    if($loginCerto == $_POST['login'] and $senhaCerto == $_POST['senha']){
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['senha'] = $_POST['senha'];
    }
   
}

   if(isset($_SESSION['login']) and isset($_SESSION['senha'])){
    echo '<br>';
    echo $_POST['login'];
    echo '<br>';
    echo $_POST['senha'];
   }else{
    header('Location: index.php');
   }

?>

<?php
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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <form action="index.php">
        <button>Logout</button>
    </form>
</body>
</html>
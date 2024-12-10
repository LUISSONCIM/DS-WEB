<?php
    session_start();
    setcookie('login', $_SESSION['login'], time() + 3600, '/');
    setcookie('produtos', $_SESSION['produtos'], time() + 3600, '/');

    header('Location: index.php');
?>
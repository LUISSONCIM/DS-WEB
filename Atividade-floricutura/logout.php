<?php
session_start();
session_destroy();
setcookie('login', '', -3600, '/' );
setcookie('produtos', '', -3600, '/' );
header('Location: index.php');



?>
<?php
  //Incluindo o cabeçalho
  include('head.html');

  //Includindo o corpo
  if($idadeUsuario >=16){
    include('body.html');   
  }else{
    include('body2.html');
  }

  //incluindo o corpo em PHP com o require
  require_once('body.php');


   //Incluindo o rodapé
   include('footer.html');

?>
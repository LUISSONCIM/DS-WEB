<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        *{
            margin: 0;
        }
         body{
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: blue;
         }
           
         h1{
            color:purple;
         }
         p{
            color: aqua;
         }
         .segunda-div{
            background-color: silver;
            border: solid 1px;
            margin: 2px;
            padding: 20px;
         }
    </style>
   <div>
   <form class="segunda-div" action="session.php" method="post">
     <h1>Sistema de Login de Produtos</h1>
     <br><br>
     <label>Login:</label> <input type="text">
     <br><br>
     <label>Produtos:</label> <input type="text">
     <br><br>
     <input type="submit" value="Enviar">
   </form>

      <a href="logout.php"><button>Logout</button></a>
      <a href="cookie.php"><button>Salvar</button></a>
   </div>

    
     
     
     
    
</body>
</html>
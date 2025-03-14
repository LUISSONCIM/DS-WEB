<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
</head>
<body>
    <style>
         *{
            margin: 0;
        }
        .produto{
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: black;
        }
        </style>
        <br>
    <h1>Produto</h1>
    <form action="cliente.php" method = "POST">
        <label>Nome do Produto : </label>
        <input type="text" name= "nome">
        <br>
        <label> Valor:</label>
        <input type="text" name= "valor">
        <br>
        <label>Estoque:</label>
        <input type="text" name= "estoque">
        <br>
        <input type="submit">
        <br>
        </form>
        <br>

        <h1>Cliente</h1>

        <form action="produto.php" method = "POST">
        <label>Nome do Cliente : </label>
        <input type="text" name= "nome do cliente">
        <br>
        <label> Senha do Cliente:</label>
        <input type="text" name= "senha do do cliente">
        <br>
        <label>Email do cliente:</label>
        <input type="text" name= "email do cliente">
        <br>
        <input type="submit">
        <br>
        </form>
    
</body>
</html>

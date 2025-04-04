<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Business System</title>
    <link rel="stylesheet" href="./assets/style/style.css">
</head>
<body>
    <div class = "menu"></div>
    

        <div class = "container"></div>
        <hr>
        <div>Minhas vendas<h4></h4></div>
        <p id= "aviso"></p>
        <table id = "tabelaVenda"></table>
        <div id="rodapeVenda"></div>

       
        <div class="formulario">
            
            <form action="vendaInsertion.php" method="POST" name="formulario" onsubmit="">
                <label for="codigo">Codigo da Venda: </label>
                <input type="number" name="codigo" id="codigo">
                <p class="erro-input" id="erro-codigo"><?=isset($_SESSION['erroCodigo']) ? $_SESSION['erroCodigo'] : "";?></p>

                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome">
                <p class="erro-input" id="erro-nome"><?=isset($_SESSION['erroNome']) ? $_SESSION['erroNome'] : "";?></p>

                <label for="estoque">Valor em estoque:</label>
                <input type="text" name="estoque" id="estoque">
                <p class="erro-input" id="erro-estoque"><?=isset($_SESSION['erroEstoque']) ? $_SESSION['erroEstoque'] : "";?></p>

                <label for="preco">Preço:</label>
                <input type="text" name="preco" id="preco">
                <p class="erro-input" id="erro-preco"><?=isset($_SESSION['erroPreco']) ? $_SESSION['erroPreco'] : "";?></p>
                
                <input type="submit">
            </form>
        
    </div>



        <?php
        include'conexao.php';

        $dados = $db->query("SELECT * FROM vendas");
       $vendas = $dados->fetchAll(PDO::FETCH_ASSOC);
       "<table id= 'vendas'>";

       
       echo"</tr";


       foreach($vendas as $venda){
        $idVenda = $linha['id'];
        $codigoVenda = $linha['codigo'];
        $nomeVenda = $linha['nome'];
        $estoqueVenda = $linha['estoque'];
        $precoVenda = $linha['preco'];
        echo "<tr>";
        echo "<td>".$codigoVenda."</td>";
        echo "<td>".$nomeVenda."</td>";
        echo "<td>".$estoqueVenda."</td>";
        echo "<td>".$precoVenda."</td>";
        extract($venda);
        echo"</tr";
        

       echo "</table>";

       include 'conexao.php';







       }
       ?>
</div>
</body>

</html>
<?php
session_unset();
?>
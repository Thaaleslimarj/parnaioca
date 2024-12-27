<?php   
include '../config/conn.php';  
?>  

<!DOCTYPE html>  
<html lang="pt-BR">  
<head>  
    <meta charset="UTF-8">  
    <title>Cadastrar itens frigobar</title>  
</head>  
<body>  
    <h3>Cadastrar itens do frigobar</h3>  
    <form action="include/gravarItens.php" method="POST">  
       
        <label for="idprodutos">Produtos:</label>  
        <select name="idprodutos" id="idprodutos">
        <option value="">Selecione um produto</option>
        <?php 
        
        $sqlitens = mysqli_query($conn, "select id, nome from estoque ");

        while ($itens= mysqli_fetch_assoc($sqlitens)){

        ?>
        
        <option value="<?php echo $itens['id'] ?>"><?php echo $itens['nome'] ?></option>
        <?php 
            }
        ?>
        </select><br><br>
        

        <label for="idfrigobar">Frigobares:</label>  
        <select name="idfrigobar" id="idfrigobar">
        <option value="">Selecione um frigobar</option>
        <?php 
        
        $sqlfrigobar = mysqli_query($conn, "select id, nome from frigobar");

        while ($frigobar= mysqli_fetch_assoc($sqlfrigobar)){

            ?>
        
        <option value="<?php echo $frigobar['id'] ?>"><?php echo $frigobar['nome'] ?></option>
        <?php 
            }
            ?>      
        </select><br><br>
        
        <label for="quantidade">Quantidade:</label>
        <input type="number" id="quantidade" name="quantidade" max="50" required><br><br>  
        
        <input type="submit" value="Cadastrar">  
    </form>  
</body>  
</html>  

<br><a href="../frigobar/">Página inicial</a>

<?php   
include '../config/conn.php';  
?>  

<!DOCTYPE html>  
<html lang="pt-BR">  
<head>  
    <meta charset="UTF-8">  
    <title>Cadastrar estoque</title>  
</head>  
<body>  
    <h3>Cadastrar estoque:</h3>  
    <form action="include/gravarEstoque.php" method="POST">  
       
        
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required><br><br>  
    
    <label for="valor">Valor:</label>
    <input type="text" id="valor" name="valor" required><br><br>  
    
    <label for="entradas">Entradas:</label>
    <input type="text" id="entradas" name="entradas" required><br><br>  
    
    <label for="saidas">Saidas:</label>
    <input type="text" id="saidas" name="saidas" required><br><br>  
    
    <label for="estoque">Estoque:</label>
    <input type="text" id="estoque" name="estoque" required><br><br>         
        
        <input type="submit" value="Cadastrar">  
    </form>  
</body>  

</html>  

<br><a href="index.php">Página inicial</a>

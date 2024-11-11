<?php   
include '../config/conn.php';  
?>  

<!DOCTYPE html>  
<html lang="pt-BR">  
<head>  
    <meta charset="UTF-8">  
    <title>Cadastro de frigobar</title>  
</head>  
<body>  
    <h3>Cadastro de frigobar</h3>  
    <form action="include/gravarFrigobar.php" method="POST">  
        <label for="nome">Nome:</label>  
        <input type="text" id="nome" name="nome" required><br><br>  

        <label for="valor">Valor do frigobar:</label>  
        <input type="text" id="valor" name="valor" required><br><br>  

        <label for="capacidade">Capacidade:</label>  
        <input type="number" id="capacidade" name="capacidade" required><br><br>  

        <label for="manutencao">Data da Manutenção:</label>  
        <input type="date" id="manutencao" name="manutencao" required><br><br>  

        <label for="acomodacao">Acomodação:</label>  
        <input type="text" id="acomodacao" name="acomodacao" required><br><br>  
        
        
        <label for="status">Status:</label>  
        <select id="status" name="status" required>  
            <option value="ativo">Ativo</option>  
            <option value="inativo">Inativo</option> 
            </select><br><br> 
        
        <input type="submit" value="Cadastrar">  
    </form>  
</body>  
</html>


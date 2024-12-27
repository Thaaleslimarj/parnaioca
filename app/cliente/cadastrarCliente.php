<?php 
include '../config/conn.php'
?>

<!DOCTYPE html>  
<html lang="pt-BR">  
<head>  
    <meta charset="UTF-8">  
    <title>Cadastro de Cliente</title>  
</head>  
<body>  
    <h1>Cadastro de Cliente:</h1>  
    <form action="include/gravarCliente.php" method="POST">  
        <label for="nome">Nome:</label>  
        <input type="text" id="nome" name="nome" required><br><br>  

        <label for="dtnascimento">Data de nascimento:</label>  
        <input type="date" id="dtnascimento" name="dtnascimento" required><br><br>    
        
        <label for="cpf">Cpf:</label>  
        <input type="text" id="cpf" name="cpf" required><br><br>    
        
        <label for="email">Email:</label>  
        <input type="email" id="email" name="email" required><br><br>    
       
        <label for="telefone">Telefone:</label>  
        <input type="text" id="telefone" name="telefone" required><br><br>  
        
        <label for="estado">Estado:</label>  
        <input type="text" id="estado" name="estado" required><br><br>  
        
        <label for="cidade">Cidade:</label>  
        <input type="text" id="cidade" name="cidade" required><br><br>  
        
        <label for="status">Status:</label>  
        <select name="status" id="status">
            <option value="ativo">Ativo</option> 
            <option value="inativo">Inativo</option>
        </select>
        
        <p></p><input type="submit" value="Cadastrar"></p>
    </form>  
</body>  
</html>

<a href="../cliente/">Paginal inicial</a>
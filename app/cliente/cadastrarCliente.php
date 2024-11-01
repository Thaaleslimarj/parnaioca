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
    <h1>Cadastro de Cliente</h1>  
    <form action="include/gravarCliente.php" method="POST">  
        <label for="nome">Nome:</label>  
        <input type="text" id="nome" name="nome" required><br><br>  

        <label for="valor">Valor:</label>  
        <input type="date" id="valor" name="valor" required><br><br>  

        <label for="capacidade">Capacidade:</label>  
        <input type="text" id="capacidade" name="capacidade" required><br><br>  

        <label for="Tipo">Tipo:</label>  
        <input type="email" id="tipo" name="tipo" required><br><br>  

        <label for="telefone">Telefone:</label>  
        <input type="text" id="telefone" name="telefone" required><br><br>  

        <label for="estado">Estado:</label>  
        <input type="text" id="estado" name="estado" required><br><br>  

        <label for="cidade">Cidade:</label>  
        <input type="text" id="cidade" name="cidade" required><br><br>  

        <input type="submit" value="Cadastrar">  
    </form>  
</body>  
</html>
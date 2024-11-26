<?php   
include '../config/conn.php';  
?>  

<!DOCTYPE html>  
<html lang="pt-BR">  
<head>  
    <meta charset="UTF-8">  
    <title>Cadastro de Acomodações</title>  
</head>  
<body>  
    <h1>Cadastro de Acomodações</h1>  
    <form action="include/gravarAcomodacao.php" method="POST"> 

        <label for="nome">Nome da Acomodação:</label>  
        <input type="text" id="nome" name="nome" required><br><br>  

        <label for="valor">Valor por Noite:</label>  
        <input type="text" id="valor" name="valor" required><br><br>  

        <label for="capacidade">Capacidade (número de pessoas):</label>  
        <input type="number" id="capacidade" name="capacidade" max= "5"  required><br><br>  

        <label for="tipo">Tipo de Acomodação:</label>  
        <select id="tipo" name="tipo" required>    
            <option value="suite">Suíte</option>    
            <option value="apartamento">Apartamento</option>  
        </select><br><br>  

        <label for="status">Status:</label>  
        <select id="status" name="status" required>  
            <option value="ativo">Ativo</option>  
            <option value="inativo">Inativo</option>  
        </select><br><br>  

        <input type="submit" value="Cadastrar">  
    </form>  
</body>  
</html>


<br><a href="../index.php">Paginal inicial</a>
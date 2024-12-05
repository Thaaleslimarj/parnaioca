<?php   
include '../config/conn.php';  
?>  

<!DOCTYPE html>  
<html lang="pt-BR">  
<head>  
    <meta charset="UTF-8">  
    <title>Cadastro de estacionamento</title>  
</head>  
<body>  
    <h3>Cadastro de estacionamento:</h3>  
    <form action="include/gravarEstacionamento.php" method="POST">  
       
        <label for="nome">Nome:</label>  
        <input type="text" id="nome" name="nome" required><br><br>  
        
        <label for="acomodacao">Acomodação:</label>  
          <select name="acomodacao" class="required" required>
            <?php  
            
                $sql = "SELECT * FROM acomodacoes";  
                $result = mysqli_query($conn, $sql);  
                
                if (!$result) {  
                    die("Erro na consulta: " . mysqli_error($conn));  
                }  
                
                while ($row = mysqli_fetch_array($result)) {  
                    
                    echo "<option value='" . $row["id"] . "'>" . $row["nome"] . "</option>";  
                }  
            ?>    
        </select><p></p>

        <label for="placa">Placa:</label>  
        <input type="text" id="placa" name="placa" required><br><br>  
        
                
        
        <label for="status">Status:</label>  
        <select id="status" name="status" required>  
            <option value="ativo">Ativo</option>  
            <option value="inativo">Inativo</option>   
        </select><br><br>  
        
        <input type="submit" value="Cadastrar">  
    </form>  
</body>  
</html>  

<br><a href="../index.php">Página inicial</a>

<?php   
include '../config/conn.php';  
?>  

<!DOCTYPE html>  
<html lang="pt-BR">  
<head>  
    <meta charset="UTF-8">  
    <title>Cadastrar Reserva</title>  
     
    </style>  
</head>  
<body>  
    <h3>Cadastro de Reserva</h3>  
    <form action="include/gravarReserva.php" method="POST">  
        
        <br>    
        <label for="id_cliente">CPF do cliente:</label>  
        <input type="text" id="id_cliente" name="id_cliente" maxlength="11" required>  
        <br><br>
        <label for="qtdhospede">Numero de hóspede:</label>  
        <input type="text" id="qtdhospede" name="qtdhospede" required>  

        <br><br>
        <label for="acomodacao">Cadastro de reserva:</label>  
        <select name="reserva" id="reserva" class="required" required>  
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
        </select>  
        
        <br><br>
        <label for="data_inicio">Data de início:</label>  
        <input type="date" id="data_inicio" name="data_inicio" required>  
        
        <br><br>
        <label for="data_final">Data final:</label>  
        <input type="date" id="data_final" name="data_final" required>  
        

        <br><br>
        <label for="status">Status:</label>  
        <select id="status" name="status" required>  
            <option value="ativo">Ativo</option>  
            <option value="inativo">Inativo</option>   
        </select>  
        
        <br><br>
        <input type="submit" value="Cadastrar">  
    </form>  
    
    <br><br>
    <a href="../index.php">Página inicial</a>  
</body>  
</html>
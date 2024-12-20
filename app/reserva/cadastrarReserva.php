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
    <h3>Agendar / Reservar uma acomodação:</h3>  
    <form action="include/gravarReserva.php" method="POST">  

    <br>
        <label for="data_inicio">Data de início:</label>  
        <input type="date" id="data_inicio" name="data_inicio" required>  
        
        <br><br>
        <label for="data_final">Data final:</label>  
        <input type="date" id="data_final" name="data_final" required>  
            
        <br><br>
        <label for="acomodacao">Acomodações disponíveis:</label>  
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
        <label for="id_cliente">CPF do cliente:</label>  
        <input type="text" id="id_cliente" name="id_cliente" maxlength="11" required>  
        <br><br>

        <label for="qtdhospede">Numero de hóspede:</label>  
        <input type="number" id="qtdhospede" name="qtdhospede" max="5" required>  


        <br><br>
        <label for="status">Status:</label>  
        <select id="status" name="status" required>  
            <option value="reservado">Reservado</option>  
            <option value="checkin">Check-in</option>   
            <option value="checkout">Check-out</option>   
            <option value="finalizado">Finalizado</option>   
        </select>  
        
        <br><br>
        <label for="data_checkin">Check-in:</label>  
        <input type="date" id="data_checkin" name="data_checkin">


        <br><br>
        <input type="submit" value="Cadastrar">  
    </form>  
    
    <br><br>
    <a href="../index.php">Página inicial</a>  
</body>  
</html>
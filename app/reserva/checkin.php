<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
       
       <?php
        include_once '../config/conn.php';
        // $id = $_GET["id"];

        // $sql = "select * from frigobar where id = " . $id;
        // $result = mysqli_query($conn, $sql);
        // // linha a linha do banco
        // $row = mysqli_fetch_array($result);
        // ?>
                
        <h3>Check-in</h3>

        <form action="./include/gCheckin.php.php" method="post">            


            <input type="hidden" readonly="true" name="id" value="<?php echo $row["id"] ?>"/>

            <label for="cliente">Cliente:</label>  
            <input type="text" id="cliente" name="cliente" required><br><br>
            
            <label for="cpf">Cpf:</label>  
            <input type="text" id="cpf" name="cliente" required><br><br>
            
            <label for="acomodacao">Acomodação:</label>  
            <input type="text" id="acomodacao" name="acomodacao" required><br><br>
            
            <label for="entrada">Entrada prevista:</label>  
            <input type="date" id="entrada" name="entrada" required><br><br>
            
            <label for="saida">Saída prevista:</label>  
            <input type="date" id="saida" name="saida" required><br><br>
            
            <label for="numero">Número:</label>  
            <input type="number" id="numero" name="numero" required><br><br>
            
            <label for="quantidade">Quantidade de hóspede:</label>  
            <input type="number" id="quantidade" name="quantidade" required><br><br>
            
            <input type="submit" value="Enviar" />

        </form>        

    </body>
</html>

<br/>
<a href="index.php">Página Inicial</a>
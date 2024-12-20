<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
       
       <?php
        include_once '../config/conn.php';
        $id = $_GET["id"];

        $sql = "select * from reserva where id = " . $id;
        $result = mysqli_query($conn, $sql);
        // linha a linha do banco
        $row = mysqli_fetch_array($result);
        ?>
                
        <h3>Editar Reserva</h3>

        <form action="./include/atualizarReserva.php" method="post">            


            <input type="hidden" readonly="true" name="id" value="<?php echo $row["id"] ?>"/>

            Acomodação:<Br/>
            <input type="text" name="id_acomodacao" value="<?php echo $row["id_acomodacao"] ?>"/><br/>

            Cpf:<Br/>
            <input type="text" name="cpf" value="<?php echo $row["cpf"] ?>"/><br/>

            Data de inicio:<Br/>
            <input type="date" name="data_inicio"  value="<?php echo ($row["data_inicio"]) ?>"/><br/>
            
            Data final:<Br/>
            <input type="date" name="data_final"  value="<?php echo ($row["data_final"]) ?>"/><br/>
            
            Quantidade de hóspede:<Br/>
            <input type="number" name="qtdhospede"  value="<?php echo ($row["qtdhospede"]) ?>"/><br/>
            
            Status:<br />  
            <select name="status" id="status">
                <option value="ativo">Ativo</option>
                <option value="inativo">Inativo</option>
            </select>
            
            <br><br>
            <input type="submit" value="Enviar" />

        </form>        

    </body>
</html>

<br/>
<a href="index.php">Página inicial</a>

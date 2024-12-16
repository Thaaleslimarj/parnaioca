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

        $sql = "select * from acomodacoes where id = " . $id;
        $result = mysqli_query($conn, $sql);
        // linha a linha do banco
        $row = mysqli_fetch_array($result);
        ?>
                
        <h3>Editar Reserva</h3>

        <form action="./include/atualizarReserva.php" method="post">            


            <input type="hidden" readonly="true" name="id" value="<?php echo $row["id"] ?>"/>

            Idacomodacao:<Br/>
            <input type="text" name="id_acomodacao" value="<?php echo $row["nome"] ?>"/><br/>

            Idcliente:<Br/>
            <input type="text" name="id_cliente" value="<?php echo $row["valor"] ?>"/><br/>

            Data de inicio:<Br/>
            <input type="date" name="data_inicio"  value="<?php echo ($row["capacidade"]) ?>"/><br/>
            
            Data final:<Br/>
            <input type="date" name="data_final"  value="<?php echo ($row["tipo"]) ?>"/><br/>
            
            Quantidade de hóspede:<Br/>
            <input type="number" name="qtd_hospede"  value="<?php echo ($row["status"]) ?>"/><br/>
            
            Status:<br />  
            <select name="status" id="status">
                <option value="ativo">Ativo</option>
                <option value="inativo">Inativo</option>
            </select>
            
            
            <input type="submit" value="Enviar" />

        </form>        

    </body>
</html>

<br/>
<a href="index.php">Página inicial</a>

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

        $sql = "select * from frigobar where id = " . $id;
        $result = mysqli_query($conn, $sql);
        // linha a linha do banco
        $row = mysqli_fetch_array($result);
        ?>
                
        <h3>Editar frigobar</h3>

        <form action="./include/atualizarFrigobar.php" method="post">            


            <input type="hidden" readonly="true" name="id" value="<?php echo $row["id"] ?>"/>

            Nome:<Br/>
            <input type="text" name="nome" value="<?php echo $row["nome"] ?>"/><br/>
            
            Idacomodação:<Br/>
            <input type="number" name="idacomodacao" max="13" value="<?php echo $row["nome"] ?>"/><br/>
            
            Valor:<Br/>
            <input type="text" name="valor" value="<?php echo $row["valor"] ?>"/><br/>

            Capacidade:<Br/>
            <input type="number" name="capacidade" max="1" value="<?php echo ($row["capacidade"]) ?>"/><br/>
            
            Manutenção:<Br/>
            <input type="text" name="manutencao"  value="<?php echo ($row["manutencao"]) ?>"/><br/>
            
            Status:<Br/>
            <input type="text" name="status"  value="<?php echo ($row["status"]) ?>"/><br/>
            
            <input type="submit" value="Enviar" />

        </form>        

    </body>
</html>

<br/>
<a href="index.php">Página Inicial</a>

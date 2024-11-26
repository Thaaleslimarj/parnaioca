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
                
        <h3>Editar Acomodações</h3>

        <form action="./include/atualizarAcomodacoes.php" method="post">            


            <input type="hidden" readonly="true" name="id" value="<?php echo $row["id"] ?>"/>

            Nome:<Br/>
            <input type="text" name="nome" value="<?php echo $row["nome"] ?>"/><br/>

            Valor:<Br/>
            <input type="text" name="valor" value="<?php echo $row["valor"] ?>"/><br/>

            Capacidade:<Br/>
            <input type="text" name="capacidade"  value="<?php echo ($row["capacidade"]) ?>"/><br/>
            
            Tipo:<Br/>
            <input type="text" name="tipo"  value="<?php echo ($row["tipo"]) ?>"/><br/>
            
            Status:<Br/>
            <input type="text" name="status"  value="<?php echo ($row["status"]) ?>"/><br/>
            
            <input type="submit" value="Enviar" />

        </form>        

    </body>
</html>

<br/>
<a href="index.php">Página inicial</a>

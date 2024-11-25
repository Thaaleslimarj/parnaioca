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

        $sql = "select * from funcionario where id = " . $id;
        $result = mysqli_query($conn, $sql);
        // linha a linha do banco
        $row = mysqli_fetch_array($result);
        ?>
                
        <h3>Editar funcionário</h3>

        <form action="include/atualizarFuncionario.php" method="post">            


            <input type="hidden" readonly="true" name="id" value="<?php echo $row["id"] ?>"/>

            Nome:<Br/>
            <input type="text" name="nome" value="<?php echo $row["nome"] ?>"/><br/>

            login:<Br/>
            <input type="text" name="login" value="<?php echo $row["login"] ?>"/><br/>

            senha:<Br/>
            <input type="text" name="senha"  value="<?php echo ($row["senha"]) ?>"/><br/>
            
            tipo:<Br/>
            <input type="text" name="tipo"  value="<?php echo ($row["tipo"]) ?>"/><br/>
            
            status:<Br/>
            <input type="text" name="status"  value="<?php echo ($row["status"]) ?>"/><br/>
            
            <input type="submit" value="Enviar" />

        </form>        

    </body>
</html>

<br/>
<a href="index.php">Página Inicial</a>
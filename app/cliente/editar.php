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

        $sql = "select * from clientes where id = " . $id;
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        // echo '<pre>';
        // print_r($row);
        // die();
        ?>
                
        <h3>Editar clientes</h3>

        <form action="include/atualizarCliente.php" method="post">            


            <input type="hidden" readonly="true" name="id" value="<?php echo $row["id"] ?>"/>

            Nome:<Br/>
            <input type="text" name="nome" value="<?php echo $row["nome"] ?>"/><br/>

            Data de nascimento:<Br/>
            <input type="text" name="data_nascimento" value="<?php echo $row["data_nascimento"] ?>"/><br/>

            Cpf:<Br/>
            <input type="text" name="cpf"  value="<?php echo ($row["cpf"]) ?>"/><br/>
            
            Email:<Br/>
            <input type="text" name="email"  value="<?php echo ($row["email"]) ?>"/><br/>
            
            Telefone:<Br/>
            <input type="text" name="telefone"  value="<?php echo ($row["telefone"]) ?>"/><br/>
            
            Estado:<Br/>
            <input type="text" name="estado"  value="<?php echo ($row["estado"]) ?>"/><br/>

            Cidade:<Br/>
            <input type="text" name="cidade"  value="<?php echo ($row["cidade"]) ?>"/><br/>

            Status:<Br/>
            <input type="text" name="status"  value="<?php echo ($row["status"]) ?>"/><br/>


            <input type="submit" value="Enviar" />

        </form>        

    </body>
</html>

<br/>
<a href="../cliente/index.php">Página Inicial</a>

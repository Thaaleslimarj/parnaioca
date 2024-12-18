<?php
$id = $_GET["id"];

include_once '../../config/conn.php';

    $sql = "delete from reserva where id=" . $id;

        if (mysqli_query($conn, $sql)) {
        echo "Deletado com sucesso!";  
        } else {
        echo "Erro ao deletar!";
        }
        mysqli_close($conn);
?>

<br/>
<p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
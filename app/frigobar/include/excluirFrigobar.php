<?php
$id = $_GET["id"];

include_once '../../../app/config/conn.php';

    $sql = "delete from frigobar where id=" . $id;

        if (mysqli_query($conn, $sql)) {
        echo "Deletado com sucesso!";  
        } else {
        echo "Erro ao deletar!";
        }
        mysqli_close($conn);
?>

<br/>
<a href="../../cliente/index.php">Página inicial</a>
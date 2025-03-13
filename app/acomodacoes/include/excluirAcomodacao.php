<?php
$id = $_GET["id"];

include_once '../../../app/config/conn.php';

    $sql = "delete from acomodacoes where id=" . $id;

        if (mysqli_query($conn, $sql)) {
        echo "Deletado com sucesso!";  
        } else {
        echo "Erro ao deletar!";
        }
        mysqli_close($conn);
?>

<br/>
<a href="../../acomodacoes/">Página inicial</a>
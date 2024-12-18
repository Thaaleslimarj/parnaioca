<?php  
include '../../config/conn.php';

// Dados do funcionário a serem atualizados  
$id = $_POST['id']; 
$id_acomodacao = $_POST['id_acomodacao']; 
$id_cliente = $_POST['id_cliente']; 
$data_inicio = $_POST['data_inicio']; 
$data_final = $_POST['data_final']; 
$qtdhospede = $_POST['qtdhospede']; 
$status = $_POST['status']; 

// SQL para atualização  
 $sql = "update reserva set 
            id_acomodacao = '$id_acomodacao' ,
            id_cliente = '$id_cliente' ,
            data_inicio = '$data_inicio' ,
            data_final = '$data_final' ,
            qtdhospede = '$qtdhospede' ,
            status = '$status' 
            where id = $id";  
    

if (mysqli_query($conn, $sql)) {  
    echo "Registro atualizado com sucesso!";  
} else {  
    echo "Erro ao atualizar registro: " . mysqli_error($conn);  
}  

// Fechar conexão  
mysqli_close($conn);  
?>

<br/>
<a href="../index.php">Página Inicial</a
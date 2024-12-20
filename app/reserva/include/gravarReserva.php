<?php  
include '../../config/conn.php';  

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    // Captura os dados do formulário    
    $id_acomodacao = $_POST['id_acomodacao'];  
    $cpf = $_POST['cpf'];  
    $data_inicio = $_POST['data_inicio'];  
    $data_final = $_POST['data_final'];  
    $qtdhospede = $_POST['qtdhospede'];  
    $data_checkin = $_POST['data_checkin'] ?? null;  
    $status = $_POST['status'];  
     
    // Marcador de erro nas validações  
    $erro = 0;  
    // Mensagem exibida de erro  
    $msg = "";  

    // Validação da reserva por acomodação  
    if(empty($id_acomodacao)) {  
        $erro = 1;  
        $msg .= "Id da acomodação é obrigatório.<br>";  
    }  

    // Validação de cliente  
    if(empty($cpf)) {  
        $erro = 1;  
        $msg .= "Cliente é obrigatório.<br>";  
    }  

    // Validação de início da reserva  
    if(empty($data_inicio)) {  
        $erro = 1;  
        $msg .= "Data de início é obrigatório.<br>";  
    }  

    // Validação de final da reserva  
    if(empty($data_final)) {  
        $erro = 1;  
        $msg .= "Data final é obrigatório.<br>";  
    }  

    // Validação de quantidade de hóspede  
    if(empty($qtdhospede)) {  
        $erro = 1;  
        $msg .= "Quantidade de hóspede é obrigatório.<br>";  
    }  

    // Validação de status  
    if(empty($status)) {  
        $erro = 1;  
        $msg .= "Status é obrigatório.<br>";  
    }    

    $buscavaloracomodacao = "SELECT valor FROM acomodacoes WHERE id = $id_acomodacao";
    $result = mysqli_query($conn, $buscavaloracomodacao);
        // linha a linha do banco
        $valoracomodacao = mysqli_fetch_array($result);

    // Verifica se após as validações o marcador continua zero (sem erros)  
    if($erro == 0) {  
        // Criação da query para inserir os dados  
        $sql = "INSERT INTO reserva (id_acomodacao, id_cliente, data_inicio, data_final, qtdhospede, status, data_checkin, valor_total)  
            VALUES ('$id_acomodacao', '$id_cliente', '$data_inicio', '$data_final', '$qtdhospede', '$status', '$data_checkin', '$valoracomodacao[0]')";  

        if ($conn->query($sql) === TRUE) {  
            echo "Reserva realizada com sucesso!";  
        } else {  
            echo "Erro ao realizar a reserva: " . $conn->error;  
        }  
    } else {  
        echo $msg; // Exibe as mensagens de erro  
    }  

    // Fecha a conexão  
    $conn->close();

}  
?>  
<br>  
<p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
<?php  
include '../../config/conn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {  

    // Captura os dados do formulário    
    $id_acomodacao = $_POST['id_acomodacao'];  
    $id_cliente = $_POST['id_cliente'];  
    $data_inicio = $_POST['data_inicio'];  
    $data_final = $_POST['data_final'];  
    $qtdhospede = $_POST['qtdhospede'];  
    $status = $_POST['status'];  
     

    // Marcador de erro nas validações
    $erro = 0;
    // Mensagem exibida de erro
    $msg = "";

    // validação da reserva por acomodação
    if(empty($id_acomodacao )){
        $erro = 1;
        $msg .= "Idacomodação é obrigatório.<br>";
    }

    //validação de cliente
    if($id_cliente){
        $erro = 1;
        $msg .= "cliente é obrigatório.<br>";
    }

    //validação de inicio da reserva
    if($data_inicio){
        $erro = 1;
        $msg .= "Data de início é obrigatório.<br>";
    }

    //validação de final da reserva
    if($data_final) {
        $erro = 1;
        $msg .= "Data final é obrigatório.<br>";
    }

    //validação de quantidade de hóspede
    if($qtdhospede) {
        $erro = 1;
        $msg .= "Quantidade de hóspede é obrigatório.<br>";
    }

    //validação de status
    if(empty($status)) {
        $erro = 1;
        $msg .= "Status é obrigatório.<br>";
    }    

    //  Verifica se após as validações o marcador continua zero, se continuar executara o codigo a seguir
    if($erro ==0){

        // Criação da query para inserir os dados  
        $sql = "INSERT INTO reserva (id_acomodacao, id_cliente, data_inicio, data_final, qtdhospede, status)  
            VALUES ('$id_acomodacao', '$id_cliente', '$data_inicio', '$data_final', '$qtdhospede', '$status')";  

if ($conn->query($sql) === TRUE) {  
    echo "Reserva realizado com sucesso!";  
}}   
    echo $msg;
    // Fecha a conexão  
    $conn->close();  
  }
?>
<br>


<p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
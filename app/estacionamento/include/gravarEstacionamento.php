<?php  
include '../../config/conn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {  

    // Captura os dados do formulário    
    $nome = $_POST['nome'];  
    $acomodacao = $_POST['acomodacao'];  
    $placa = $_POST['placa'];  
    $status = $_POST['status'];  
     

    // Marcador de erro nas validações
    $erro = 0;
    // Mensagem exibida de erro
    $msg = "";

    // validação do nome
    if(empty($nome )){
        $erro = 1;
        $msg .= "Nome é obrigatório.<br>";
    }

    //validação de valor
    if(empty($acomodacao )){
        $erro = 1;
        $msg .= "acomodacao é obrigatório.<br>";
    }

    //validação de capacidade
    if(empty($placa )){
        $erro = 1;
        $msg .= "placa é obrigatório<br>";
    }

    //validação de status
    if(empty($status)) {
        $erro = 1;
        $msg .= "Status é obrigatório.<br>";
    }

    //  Verifica se após as validações o marcador continua zero, se continuar executara o codigo a seguir
    if($erro ==0){

        // Criação da query para inserir os dados  
        $sql = "INSERT INTO estacionamento (nome, acomodacao, placa, status)  
            VALUES ('$nome', '$acomodacao', '$placa', '$status')";  

if ($conn->query($sql) === TRUE) {  
    echo "Cadastro realizado com sucesso!";  
}}   
    echo $msg;
    // Fecha a conexão  
    $conn->close();  
  }
?>
<br>


<p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
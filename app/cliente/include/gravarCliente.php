<?php  
include '../../config/conn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {  

    // Captura os dados do formulário  
    $nome = $_POST['nome'];  
    $data_nascimento = $_POST['dtnascimento'];  
    $cpf = $_POST['cpf'];  
    $email = $_POST['email'];  
    $telefone = $_POST['telefone'];  
    $estado = $_POST['estado'];  
    $cidade = $_POST['cidade'];  
    $status = $_POST['status'];  


    // Regra de email funcional, verifica cada etapa de construção do email
    $regraemail = "/^[a-zA-Z0-9.-_]+@[a-zA-Z0-9-]+\.[a-zA-Z.]+$/";

    $regranome = "/^[a-z A-ZçÇà-üÀ-ÜñÑ]{3,50}$/";


    // Marcador de erro nas validações
    $erro = 0;
    // Mensagem exibida de erro
    $msg = "";
    
    if (!preg_match($regranome, $nome)){
        $erro = 1;
        $msg = $msg. "preencha o nome corretamente";

    } 

    // Verificação de consistencia na construção de email
    if(!preg_match($regraemail, $email)){
        // marcador definindo que existe erro
        $erro = 1;
        // Mensagem exibida explicando o erro
        $msg = "Preencha o email corretamente";
    }
    

    //  Verifica se após as validações o marcador continua zero, se continuar executara o codigo a seguir
    if($erro ==0){

        // Criação da query para inserir os dados  
        $sql = 
            "INSERT INTO clientes (nome, data_nascimento, cpf, email, telefone, estado, cidade, status)  
            VALUES ('$nome', '$data_nascimento', '$cpf', '$email', '$telefone', '$estado', '$cidade', '$status')
        ";  

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
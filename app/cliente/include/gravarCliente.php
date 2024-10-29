<?php  
include '../../config/conn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {  

    // Captura os dados do formulário  
    $nome = $_POST['nome'];  
    $data_nascimento = $_POST['data_nascimento'];  
    $cpf = $_POST['cpf'];  
    $email = $_POST['email'];  
    $telefone = $_POST['telefone'];  
    $estado = $_POST['estado'];  
    $cidade = $_POST['cidade'];  

    // Regra de email funcional, verifica cada etapa de construção do email
    $regraemail = "/^[a-zA-Z0-9.-_]+@[a-zA-Z0-9-]+\.[a-zA-Z.]+$/";

    // Marcador de erro nas validações
    $flag = 0;
    // Mensagem exibida de erro
    $msg = "";

    // Verificação de consistencia na construção de email
    if(!preg_match($regraemail, $email)){
        // marcador definindo que existe erro
        $flag = 1;
        // Mensagem exibida explicando o erro
        $msg = "Preencha o email corretamente";
    }

    //  Verifica se após as validações o marcador continua zero, se continuar executara o codigo a seguir
    if($flag ==0){

        // Criação da query para inserir os dados  
        $sql = "INSERT INTO clientes (nome, data_nascimento, cpf, email, telefone, estado, cidade)  
            VALUES ('$nome', '$data_nascimento', '$cpf', '$email', '$telefone', '$estado', '$cidade')";  

if ($conn->query($sql) === TRUE) {  
    echo "Cadastro realizado com sucesso!";  
}}   
    echo $msg;
    // Fecha a conexão  
    $conn->close();  
  }
?>
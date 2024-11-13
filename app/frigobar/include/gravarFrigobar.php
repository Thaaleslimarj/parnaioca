<?php  
include '../../config/conn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {  

    // Captura os dados do formulário    
    $nome = $_POST['nome'];  
    $valor = $_POST['valor'];  
    $capacidade = $_POST['capacidade'];  
    $manutencao = $_POST['manutencao'];  
    $acomodacao = $_POST['acomodacao'];  
    $status = $_POST['status'];  


    // Marcador de erro nas validações
    $flag = 0;
    // Mensagem exibida de erro
    $msg = "";

    // validação do nome
    if(empty($nome )){
        $flag = 1;
        $msg .= "Nome é obrigatório.<br>";
    }

    //validação de valor
    if($valor <= 0){
        $flag = 1;
        $msg .= "Valor inválido, informe um valor maior que R$0.<br>";
    }

    //validação de capacidade
    if($capacidade <=0){
        $flag = 1;
        $msg .= "Capacidade inválida, informe um número maior que 0<br>";
    }

    //validação de manuntencao
    if(empty($manutencao)) {
        $flag = 1;
        $msg .= "Manutencao é obrigatório.<br>";
    }

    //validação de status
    if(empty($status)) {
        $flag = 1;
        $msg .= "Status é obrigatório.<br>";
    }

    //  Verifica se após as validações o marcador continua zero, se continuar executara o codigo a seguir
    if($flag ==0){

        // Criação da query para inserir os dados  
        $sql = "INSERT INTO frigobar (nome, valor, capacidade, manutencao, status)  
            VALUES ('$nome', '$valor', '$capacidade', '$manutencao', '$status')";  

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
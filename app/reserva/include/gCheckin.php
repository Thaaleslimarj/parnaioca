<?php  
  
include_once '../config/conn.php';  

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    $id = $_POST['id'];  
    $cliente = $_POST['cliente'];  
    $cpf = $_POST['cpf'];  
    $acomodacao = $_POST['acomodacao'];  
    $entrada = $_POST['entrada'];  
    $saida = $_POST['saida'];  
    $numero = ['numero'];
    $quantidade ['quantidade'];  

    // Marcador de erro nas validações  
    $erro = 0;
    // Mensagem exibida de erro  
    $msg = "";  

    // Validação do cliente  
    if (!$cliente) {  
        $erro = 1;  
        $msg .= "O campo cliente é obrigatório.<br>";  
    }  

    // Validação do CPF  
    if (!$cpf) {
        $erro = 1;  
        $msg = "O campo CPF é obrigatório.";  
    } elseif (!preg_match("/^\d{11}$/", $cpf)) {  
        $msg = "O CPF deve conter exatamente 11 dígitos numéricos.";  
    }  

    // Validação da Acomodação  
    if (!$acomodacao) {  
        $erro = 1;
        $msg = "O campo Acomodação é obrigatório.";  
    }  

    // Validação das datas  
    if (!$entrada) {  
        $erro = 1;
        $msg = "O campo Entrada é obrigatório.";  
    }  
    if (!$saida) {  
        $erro = 1;
        $msg = "O campo Saída é obrigatório.";  
    } elseif ($entrada > $saida) {  
        $msg = "A data de entrada deve ser anterior à data de saída.";  
    }  

    // Validação do Número  
    if (($numero) || $numero <= 0) {  
        $msg = 1;
        $erro = "O campo Número deve ser um valor positivo.";  
    }  

    // Validação da Quantidade  
    if (($quantidade) || $quantidade <= 0) {  
        $msg = 1;
        $erro = "O campo Quantidade de hóspede deve ser um valor positivo.";  
    }  

     {  

        // Verifica se após as validações o marcador continua zero (sem erros)  
    if($erro == 0) {  
        // Criação da query para inserir os dados  
        $sql = "INSERT INTO reserva (id_acomodacao, id_cliente, data_inicio, data_final, qtdhospede, status)  
                VALUES ('$acomodacao', '$cliente', '$entrada', '$saida', '$quantidade', 'status')";

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
}  
 
?>

<p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
<?php 
include '../../config/conn.php';
// if ($_SERVER["REQUEST_METHOD"] == "POST"){

    //captura os dados do formulário
    $idprodutos = $_POST['idprodutos'];
    $idfrigobar = $_POST['idfrigobar'];
    $quantidade = $_POST['quantidade'];
    
    //Marcador de erro nas validações
    $flag =0;
    //Mensagem exibida de erro
    $msg = "";
    
    //validação de produtos
    if(empty($idprodutos)){
        $flag = 1;
        $msg = "produto é obrigatório.<br>";
    }
    
    //validação de frigobar
    if(empty($idfrigobar)){
        $flag = 1;
        $msg = "frigobar é obrigatório.<br>";
    }
    
    
    //verificação se o frigobar já existe na tabela
    $frigobar= mysqli_query($conn, "SELECT * FROM frigobar WHERE id= $idfrigobar"); 
    if (mysqli_num_rows($frigobar) = 0){
        $flag = 1;
        $msg = "Frigobar não cadastrado";    
    }
    
    
    //validação da quantidade
    if(empty($quantidade)){
        $flag = 1;
        $msg = "quantidade inválida, informe um número maior que 0<br>";
    }
    
    
    //  Verifica se após as validações o marcador continua zero, se continuar executara o codigo a seguir
    if($flag ==0){

        // Criação da query para inserir os dados  
    $sql = "INSERT INTO itens_frigobar (idprodutos, idfrigobar, quantidade)
        VALUES ('$idprodutos', '$idfrigobar', '$quantidade')";
    

    if ($conn->query($sql) == TRUE) {
        echo "Cadastro realizado com sucesso";
    }}

    echo $msg;
    
    //Fecha a conexão 
    $conn->close();
?>

<a href="../index.php">Página inicial</a>
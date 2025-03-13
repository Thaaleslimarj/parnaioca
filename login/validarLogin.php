<?php  

// Inclui o arquivo de configuração que contém a conexão com o banco de dados  
include '../app/config/conn.php';  

// Verifica se os campos de login e senha não estão vazios  
if (!empty($_POST['login']) && !empty($_POST['senha'])) {  
    // Armazena os dados de login e senha enviados via POST  
    $login = $_POST['login'];  
    $senha = md5($_POST['senha']);    

    // Usa consultas preparadas para prevenir SQL Injection  
    $sql = "SELECT * FROM funcionario WHERE login = ?";  
    $stmt = mysqli_prepare($conn, $sql);  
    mysqli_stmt_bind_param($stmt, 's', $login); // 's' indica que estamos esperando um string  

    mysqli_stmt_execute($stmt);  
    $resultado = mysqli_stmt_get_result($stmt);  

    // Verifica se um funcionário foi encontrado  
    if (mysqli_num_rows($resultado) == 0) {  
        // Redireciona para a página de login se o login não foi encontrado  
        header('location: ../index.php');  
        die(); // Encerra o script após o redirecionamento  
    }  

    $array = mysqli_fetch_assoc($resultado);  
    $senhaBanco = $array['senha'];  

    // Verifica se a senha fornecida corresponde à senha do banco de dados  
    if ($senhaBanco = $senha) {  
        // Inicializa a sessão e armazena o login do usuário  
        session_start();  
        $_SESSION['usuario_logado'] = $array['login'];  

        // Se as credenciais estiverem corretas, redireciona para a página de funcionários  
        header('location: ../app/index.php');  
        exit();  
    } else {  
        // Redireciona para a página de login com mensagem de erro  
        header('location: ../index.php?msgInvalida=Senha incorreta.');  
        exit();  
    }  

} else {  
    // Exibe uma mensagem de erro se os campos não forem preenchidos  
    echo 'Deve enviar todos os dados!';  
}  
?>
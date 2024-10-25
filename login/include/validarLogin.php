<?php

    // Inclui o arquivo de configuração que contém a conexão com o banco de dados
    include '../../app/config/conn.php';

    // Verifica se os campos de login e senha não estão vazios
    if ((!empty($_POST['login'])) && (!empty($_POST['senha']))) {
        // Armazena os dados de login e senha enviados via POST
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        // Prepara a consulta SQL para verificar se há um funcionário com o login e senha fornecidos
        $query = "SELECT * FROM funcionario WHERE login = '$login' AND senha = '$senha'";
        
        // Executa a consulta no banco de dados
        $executaConsulta = mysqli_query($conn, $query);
        $arrayDados = mysqli_fetch_assoc($executaConsulta);
        $loginBanco = $arrayDados['login'];
        
        // Conta o número de linhas retornadas pela consulta
        $numeroLinha = mysqli_num_rows($executaConsulta);

        // Verifica se não foi encontrado nenhum funcionário com as credenciais fornecidas
        if ($numeroLinha == 0) { 
            // Redireciona para a página de login se as credenciais estiverem incorretas
            header('location: ../index.php');
            die(); // Encerra o script após o redirecionamento
        }

        session_start();
        $_SESSION['usuario_logado'] = $loginBanco;

        // Se as credenciais estiverem corretas, redireciona para a página de funcionários
        header('location: ../../app/funcionarios/index.php');

    } else {
        // Exibe uma mensagem de erro se os campos não forem preenchidos
        echo 'Deve enviar todos os dados!';
    }
?>

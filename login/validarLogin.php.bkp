<?php

    // Inclui o arquivo de configuração que contém a conexão com o banco de dados
    include '../app/config/conn.php';

    // Verifica se os campos de login e senha não estão vazios
    if ((!empty($_POST['login'])) && (!empty($_POST['senha']))) {
        // Armazena os dados de login e senha enviados via POST
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        
        // consultando no banco o funcionario correspondente ao login
        $sql = "SELECT * FROM funcionario WHERE login = '$login'";
        $executaConsulta = mysqli_query($conn, $sql);
        $array = mysqli_fetch_assoc($executaConsulta);

        // verificando o numero de linhas encontradas.
        $numeroLinha = mysqli_num_rows($executaConsulta);

        // Verifica se não foi encontrado nenhum funcionário com as credenciais fornecidas
        if ($numeroLinha == 0) { 
            // Redireciona para a página de login se login de funcionario não encontrado
            header('location: ../index.php');
            die(); // Encerra o script após o redirecionamento
        }

        $senhaBanco = $array['senha'];

        // verificar se senha que usuario digitou corresponde a senha do banco como hash
        if (password_verify($senha, $senhaBanco)) {
            $loginBanco = $array['login'];

            session_start();
            $_SESSION['usuario_logado'] = $loginBanco;
            
            // Se as credenciais estiverem corretas, redireciona para a página de funcionários
            header('location: ../../app/index.php');
            
        } else {
            header('location: ../index.php?msgInvalida=Senha incorreta.');
            die();
        }
        
    } else {
        // Exibe uma mensagem de erro se os campos não forem preenchidos
        echo 'Deve enviar todos os dados!';
    }
?>

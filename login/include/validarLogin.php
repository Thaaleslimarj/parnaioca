<?php
// PEGAR DADOS DO FORMULARIO \/
$login = $_POST['login'];
$senha = $_POST['senha'];
// PEGAR DADOS DO FORMULARIO /\

// CONECTAR COM O BANCO DE DADOS \/
$hostBD = 'localhost';
$usuarioBD = 'root';
$senhaBD = '';
$schemaBD = 'parnaioca';
$conexaoBD = mysqli_connect($hostBD, $usuarioBD, $senhaBD, $schemaBD);
// CONECTAR COM O BANCO DE DADOS /\

// BUSCAR DADOS DO BANCO DE DADOS \/
$consulta = "SELECT senha FROM funcionario 
                WHERE login = '$login'"; // where = BUSCAR DE ACORDO COM O LOGIN DO FORMULARIO

// EXECUTAR A CONSULTA DO BANCO DE DADOS \/
$executaConsulta = mysqli_query($conexaoBD, $consulta);

// RETORNAR OS DADOS DO BANCO DE DADOS \/
$dadosRetornadosConsulta = mysqli_fetch_array($executaConsulta);

// SALVA O VALOR DA SENHA DO BANCO DE DADOS EM UMA VARIAVEL
$senhaBanco = $dadosRetornadosConsulta['senha'];

// VALIDAR SE A SENHA DO BANCO DE DADOS É IGUAL AO DO FORMULARIO
if($senha == $senhaBanco){
    //CASO SENHA CORRETA SALVAR NA SESSION;
    session_start();
    $_SESSION['usuario_logado'] = $login;
    header("Location: ../../app");
} else {
    header("Location: ../index.php?erro=Senha incorreta");
}
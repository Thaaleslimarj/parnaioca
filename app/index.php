<?php 
session_start(); 
if(!isset($_SESSION['usuario_logado'])){
    header("Location: ../login");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parnaioca</title>
</head>
<body>
    Bem-vindo, <?= $_SESSION['usuario_logado'] ?>
</body>
</html>
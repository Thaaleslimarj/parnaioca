<?php 
    $host = "localhost"; 
    $usuario = "root"; 
    $senha = ""; 
    $banco = "parnaioca";   

    $conn = mysqli_connect($host, $usuario, $senha, $banco);  

    if (!$conn) {  
        die("Conexão falhou");  
    } 
?>
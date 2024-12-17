<!-- MEU MENU -->
<?php 
session_start()
?>
<h3>Bem-vindo: <?= $_SESSION['usuario_logado'] ?></h3>

<a href="./cliente/index.php">Consultar clientes:</a><br/>

<a href="./funcionarios/index.php">Consultar funcionários:</a><br/>

<a href="./acomodacoes/index.php">Acomodações:</a><br/>

<a href="./reserva/index.php">Reservas:</a><br/>

<a href="./frigobar/index.php">Frigobar:</a><br/>

<a href="./estacionamento/index.php">Estacionamento</a><br/>


<p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
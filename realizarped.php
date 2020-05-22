<?php
session_start();
	
include("conexao.php");


?>
<!DOCTYPE html>
<html>
<head>
	<title>Realizar Pedido</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="icon2.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="post.css">
</head>
<body>
<nav id="c">
	
	<label id="icone" for="check"><img src="bar.png"></label>
<input type="checkbox" name="" id="check">
<div class="barra">
<nav>
		<a href="clientes.php"><div id="link">CLIENTES</div></a>
		<a href="cadcliente.php"><div id="link">CADASTRAR CLIENTE</div></a>
		<a href="realizarped.php"><div id="link">REALIZAR PEDIDO</div></a>
		<a href="trabpendentes.php"><div id="link">TRABALHOS PENDENTES</div></a>
		<a href="novadesversao.php"><div id="link">NOVIDADES DA VERSÃO</div></a>
	</nav>
</div>

<nav class="container-cadastro">

</nav>
<div class="barra2">

</div>
<div>
	<p></p>
</div>
</body>
</html>
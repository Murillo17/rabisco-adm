<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<title>Rabisco - Cadastro de Clientes</title>
	<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
		<link rel="shortcut icon" href="icon2.png">
	<link rel="stylesheet" type="text/css" href="post.css">

</head>
<body>
	
<nav id="c">
	
	<label id="icone" for="check"><img src="bar.png"></label>
</nav>

<input type="checkbox" name="" id="check">
<div class="barra">
<nav>
		<a href="postagens.php"><div id="link">INÍCIO</div></a>
		<a href="clientes.php"><div id="link">CLIENTES</div></a>
		<a href="trabalhos.php"><div id="link">REALIZAR PEDIDO</div></a>
		<a href="trabpendentes.php"><div id="link">TRABALHOS PENDENTES</div></a>
		<a href="novadesversao.php"><div id="link">NOVIDADES DA VERSÃO</div></a>
	</nav>
</div>
</nav>


<nav class="container-cadastro">
<p id="cad_nome">Cadastrar Cliente</p>

<div>

<form method="post" action="processa.php">
	<input type="text" name="nome" placeholder="Nome completo" id="ajuste1">
	<input type="email" name="email" placeholder="Email" id="ajuste2">
	<input type="date" name="data" placeholder="" id="ajuste3">

	<input type="text" name="telefone1" placeholder="Telefone comercial" id="ajuste4" id=>
	<input type="text" name="telefone2" placeholder="Telefone residêncial" id="ajuste5">
	<input type="text" name="telefone3" placeholder="Telefone pessoal" id="ajuste13">
	<input type="text" name="estado" placeholder="Estado" id="ajuste6">
	<input type="text" name="cidade" placeholder="Cidade" id="ajuste7">
	<input type="text" name="cep" placeholder="CEP" id="ajuste8">
	<input type="text" name="bairro" placeholder="Bairro" id="ajuste9">
	<input type="text" name="rua" placeholder="Rua" id="ajuste10">
	<input type="text" name="numerocasa" placeholder="Número da casa" id="ajuste11">
	<input type="text" name="complemento" placeholder="Complemento (Opcional)" id="ajuste12">
	<input type="text" name="empresa" placeholder="Nome da empresa" id="ajuste17">
	<input type="textarea" placeholder="Em caso de outro, descreva..." name="outro" id="ajuste15">
	<select id="ajuste14" name="plano">
		<option>Selecione um plano</option>
		<option>Simples</option>
		<option>Completo</option>
		<option>Outro</option>
	</select><br>
	<input type="textarea" name="anotacao" placeholder="Anotações..." id="ajuste20">
	<div align="center">
	<button type="submit" class="btn btn-success" id="cad_cliente" name="enviar" >CADASTRAR</button>
</div>
	
</form>
</div>
<nav class="container-informações">
<b>CONFIRA</b>
<p>Todos os campos não assinalados com (Opcional) são <b id="aste">OBRIGATÓRIOS</b> </p>
<p>Complementos (Casa, Apartamento, Sobrado etc...)</p>
<p>Confira se o usuário foi realmente cadastrado</p>
</nav>
</nav>




<div class="barra2">

</div>

</body>

</html>

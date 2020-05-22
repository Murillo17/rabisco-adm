<?php
			session_start();
			
		
	include("conexao.php");

	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	$result_usuario = "SELECT * FROM cad_clientes WHERE id = '$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	$row_usuario = mysqli_fetch_assoc($resultado_usuario);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="post5.css">
	<title>Visualização do cadastro</title>

</head>
<body>
	<style type="text/css" media="print">
		#c{
			display: none;
			overflow-y: : none;

		}
	</style>
<nav id="c">
	<a href="clientes.php" id="voltar"><i class="fas fa-arrow-left"></i></a>
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


<nav class="container-cadastro2">
<div align="center">
	<p id="cad_nome">Detalhes do cadastro</p>
        </div>
<div align="center">
<table border="2" id="border3">
	<tr>
		<td><b id="ajuste21">CÓDIGO</b></td>
	   	<td><b id="ajuste21">NOME</b></td><br>
	   	<td><b id="ajuste21">EMAIL</b></td>
	   	<td><b id="ajuste21">DATA DE NASCIMENTO</b></td>
	   	<td><b id="ajuste21">TELEFONE COMERCIAL</b></td>
	   	<td><b id="ajuste21">TELEFONE RESIDENCIAL</b></td>
	   	<td><b id="ajuste21">TELEFONE PESSOAL</b></td>
	   
	 
	</tr>
	<tr>
		<td><p id="detalhes2"><?php
				echo $row_usuario['id'];

			 ?></p></td>
		<td><p id="detalhes2"><?php
				echo $row_usuario['nome'];

			 ?></p></td>
		<td><p id="detalhes2"><?php
				echo $row_usuario['email'];

			 ?></p></td>
		<td><p id="detalhes2"><?php
				echo $row_usuario['data'];

			 ?></p></td>

		<td><p id="detalhes2"><?php
				echo $row_usuario['telefone1'];

			 ?></p></td>
		<td><p id="detalhes2"><?php
				echo $row_usuario['telefone2'];

			 ?></p></td>
		<td><p id="detalhes2"><?php
				echo $row_usuario['telefone3'];

			 ?></p></td><br>
			</tr>
			<tr>
					<td><b id="ajuste21">ESTADO</b></td>
	   	<td><b id="ajuste21">CIDADE</b></td>
	   	<td><b id="ajuste21">BAIRRO</b></td>
	   	<td><b id="ajuste21">RUA</b></td>
	   	<td><b id="ajuste21">NÚMERO</b></td>
	   	<td><b id="ajuste21">COMPLEMENTO</b></td>
	   	<td><b id="ajuste21">EMPRESA</b></td>
	   	
			</tr>
		<tr>
		<td><p id="detalhes2"><?php
				echo $row_usuario['estado'];

			 ?></p></td>
		<td><p id="detalhes2"><?php
				echo $row_usuario['cidade'];

			 ?></p></td>
		<td><p id="detalhes2"><?php
				echo $row_usuario['bairro'];

			 ?></p></td>
		<td><p id="detalhes2"><?php
				echo $row_usuario['rua'];

			 ?></p></td>
		<td><p id="detalhes2"><?php
				echo $row_usuario['numero_casa'];

			 ?></p></td>
		<td><p id="detalhes2"><?php
				echo $row_usuario['complemento'];

			 ?></p></td>
		<td><p id="detalhes2"><?php
				echo $row_usuario['empresa'];

			 ?></p></td>
		
		
	</tr>
	<tr>
	<td><b id="ajuste21">ANOTAÇÕES</b></td>
	<td><b id="ajuste21">PLANO</b></td>
</tr>
<tr>
	<td><p id="detalhes2"><?php
				echo $row_usuario['anotacao'];

			 ?></p></td>
			 <td><p id="detalhes2"><?php
				echo $row_usuario['plano'];

			 ?></p></td>
</tr>

   </table>
   </div>
   
</nav>




<div class="barra2">

</div>

</body>

</html>
<?php

include_once("conexao.php");

		$result_usuario = "SELECT * FROM cad_clientes";
		$con = $conn->query($result_usuario) or die ($conn->error);
		
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="post.css">
<title>Clientes</title>

</head>
<body>
	
<nav id="c">
	
	<label id="icone" for="check"><img src="bar.png"></label>
</nav>

<input type="checkbox" name="" id="check">
<div class="barra">
<nav>
		<a href="postagens.php"><div id="link">INÍCIO</div></a>
		<a href="cadcliente.php"><div id="link">CADASTRAR CLIENTE</div></a>
		<a href="trabalhos.php"><div id="link">REALIZAR PEDIDO</div></a>
		<a href="trabpendentes.php"><div id="link">TRABALHOS PENDENTES</div></a>
		<a href="novadesversao.php"><div id="link">NOVIDADES DA VERSÃO</div></a>
	</nav>
</div>
<div class="barra2">

</div>


<div align="center">
	<nav class="container-cadastro4">
	<p id="cad_nome">Consultar Cliente</p>
	<nav id="dimi">
		<?php
		if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
		}?>
</nav><br><br>
<form method="POST">
	<input type="text" name="busca" placeholder="Pesquisar cliente" id="pesquise">
	<button type="submit" name="pesquisar" id="bt-pesquise"><i class="fas fa-search"></i></button>
</form>
<br>
	<table border="1" class="rtable">
	
		<tr>
			<td><b>Código</b></td>
			<td><b>Nome</b></td>
			<td><b>Telefone Principal</b></td>
			<td><b>Estado</b></td>
			<td><b>Cidade</b></td>
			<td><b>Bairro</b></td>
			<td><b>Plano</b></td>
			<td><b>Empresa</b></td>
			
			<td><b>Ações</b></td>
			
		</tr>
<tbody>
<?php
		
		$resultado_usuario = mysqli_query($conn, $result_usuario);

		while($row_usuario = $con->fetch_array()){ ?>
			<tr>
				
					<td><?php echo $row_usuario['id'] ?> </td>
			 		<td> <?php echo $row_usuario['nome']; ?></td>
			 		<td><?php echo $row_usuario['telefone1']; ?></td>
			 		<td><?php echo $row_usuario['estado']; ?></td>
			 		<td><?php echo $row_usuario['cidade']; ?></td>
			 		<td><?php echo $row_usuario['bairro']; ?></td>
			 		<td><?php echo $row_usuario['plano']; ?></td>

			 		<td><?php echo $row_usuario['empresa']; ?></td>

			<td> <?php echo "<a href='detalhes.php?id=" . $row_usuario['id'] . "'>" ?><i class="fas fa-user-tag" id="detalhes"></i>
				<?php echo "<a href='delete.php?id=" . $row_usuario['id'] . "' data-confirm='Tem certeza que deseja excluir o usuário'>";?><i class="fas fa-user-times" id="excluir"></i>
			<?php echo "<a href='dados.php?id=" . $row_usuario['id'] . "'>"; ?><i class="fas fa-users-cog" id="editar"></i> <?php  ?>
			<?php echo "<a href='bloqueio.php?id=" . $row_usuario['id'] . "'>"; ?><i class="fas fa-user-lock" id="bloqueio"></i></td> <?php } ?>
				 </tbody>
		</tr>
	
		
</table>
</div>	
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
<script src="personalizado.js"></script>
<script src="personalizado2.js"></script>
</nav>
</script>
</body>


</html>
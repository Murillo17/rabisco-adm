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
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="post5.css">
	<title>Alteração de cadastro</title>

</head>
<body>
	
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


<nav class="container-cadastro">
<div align="center">
	<p id="cad_nome">Alteração do cadastro</p>
</div>
	<form method="POST" action="editar.php">
	
		<input type="hidden" name="id" value="<?php
			echo $row_usuario['id'];

		 ?>">
		<input type="text" name="nome" id="ajuste1" value= " <?php
			echo $row_usuario['nome'];

		 ?>">
		 <input type="email" name="email" placeholder="Email" id="ajuste2" value="<?php 
			echo $row_usuario['email'];

		 ?>">
	<input type="date" name="data" placeholder="" id="ajuste3" value="<?php 
			echo $row_usuario['data'];
	

		 ?>">

	<input type="text" name="telefone1" placeholder="Telefone comercial" id="ajuste4" value="<?php 
			echo $row_usuario['telefone1'];
		

		 ?>">
	<input type="text" name="telefone2" placeholder="Telefone residêncial" id="ajuste5"value="<?php 
			echo $row_usuario['telefone2'];
		

		 ?>">
	<input type="text" name="telefone3" placeholder="Telefone pessoal" id="ajuste13" value="<?php 
			echo $row_usuario['telefone3'];
		

		 ?>">
	<input type="text" name="estado" placeholder="Estado" id="ajuste6" value="<?php 
			echo $row_usuario['estado'];
		

		 ?>">
	<input type="text" name="cidade" placeholder="Cidade" id="ajuste7" value="<?php 
			echo $row_usuario['cidade'];
		

		 ?>">
	<input type="text" name="cep" placeholder="CEP" id="ajuste8" value="<?php 
			echo $row_usuario['cep'];
		

		 ?>">
	<input type="text" name="bairro" placeholder="Bairro" id="ajuste9" value="<?php 
			echo $row_usuario['bairro'];
		

		 ?>">
	<input type="text" name="rua" placeholder="Rua" id="ajuste10" value="<?php 
			echo $row_usuario['rua'];
		

		 ?>">
	<input type="text" name="numerocasa" placeholder="Número da casa" id="ajuste11" value="<?php 
			echo $row_usuario['numero_casa'];
		

		 ?>">
	<input type="text" name="complemento" placeholder="Complemento (Opcional)" id="ajuste12" value="<?php 
	
			echo $row_usuario['complemento'];

		 ?>">
	<input type="text" name="empresa" placeholder="Nome da empresa" id="ajuste17" value="<?php 
			echo $row_usuario['empresa'];
		

		 ?>">
	<input type="text" placeholder="Em caso de outro, descreva..." name="outro" id="ajuste15" value="<?php 
			echo $row_usuario['outro'];
		

		 ?>">
		<p id="ajuste19">Plano cadastrado:</p>
	<input type="text" name="" id="ajuste18" value="<?php 
			echo $row_usuario['plano']; ?>">
	<select id="ajuste14" name="plano" value="<?php 
			echo $row_usuario['plano'];
		

		 ?>">
		<option>Alterar Plano</option>
		<option>Simples</option>
		<option>Completo</option>
		<option>Outro</option>
	</select><br>
	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" id="bt-modal"> 
  Abrir Anotações
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Anotações</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
        echo $row_usuario['anotacao'];
        ?>

        <br>
      
        <input type="textarea" name="anotacao" placeholder="Alterações" id="alteracao-modal">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" name="clicked">SALVAR</button>

        
 
      </div>
    </div>
  </div>
</div>
	<div align="center">
	<button type="submit" class="btn btn-success" id="cad_cliente" name="enviar">SALVAR ALTERAÇÕES</button>
</div>

	</form>
</nav>




<div class="barra2">

</div>

</body>

</html>
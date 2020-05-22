
<?php
	session_start();
	include_once("conexao.php");
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
	$telefone1 = filter_input(INPUT_POST, 'telefone1', FILTER_SANITIZE_STRING);
	$telefone2 = filter_input(INPUT_POST, 'telefone2', FILTER_SANITIZE_STRING);
	$telefone3 = filter_input(INPUT_POST, 'telefone3', FILTER_SANITIZE_STRING);
	$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
	$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
	$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
	$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
	$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
	$numerocasa = filter_input(INPUT_POST, 'numerocasa', FILTER_SANITIZE_STRING);
	$complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_STRING);
	$plano = filter_input(INPUT_POST, 'plano', FILTER_SANITIZE_STRING);
	$outro = filter_input(INPUT_POST, 'outro', FILTER_SANITIZE_STRING);
	$empresa = filter_input(INPUT_POST, 'empresa', FILTER_SANITIZE_STRING);	
	$anotacao = filter_input(INPUT_POST, 'anotacao', FILTER_SANITIZE_STRING);	
	

$result_usuario = "INSERT INTO cad_clientes (nome, email, data, telefone1, telefone2,telefone3, cidade, estado, cep, bairro, rua,  numero_casa, complemento, plano, outro, empresa, anotacao) VALUES ('$nome', '$email', '$data', '$telefone1', '$telefone2', '$telefone3', '$cidade', '$estado', '$cep', '$bairro', '$rua', '$numerocasa', '$complemento', '$plano', '$outro', '$empresa', '$anotacao')";
$resultado_usuario = mysqli_query($conn, $result_usuario);
if (mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<div class='alert alert-success' role='alert'>
  CADASTRADO SUCESSO!
</div>";
	header("Location: clientes.php")
	 ?>
	<?php
}else{
	echo "erro de banco";
}
?>
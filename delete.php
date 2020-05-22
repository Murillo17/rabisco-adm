<?php
	session_start();
	include("conexao.php");
	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	$result_usuario = "DELETE FROM cad_clientes WHERE id = '$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	if (mysqli_affected_rows($conn)) {
		$_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>
  CLIENTE DELETADO COM SUCESSO!
</div>";
		header("location: clientes.php");
	}
	else{
		$_SESSION['msg'] = "<p style='color:red;'>Usuario não foi apago</p>";
		header("location: clientes.php");
	}

?>

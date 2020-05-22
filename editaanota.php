<?php
session_start();
include_once("conexao.php")

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$anotacao = filter_input(INPUT_POST, 'anotacao', FILTER_SANITIZE_STRING);

$result_usuario = "UPDATE cad_clientes SET anotacao='$anotacao' WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario) or die (mysqli_error();

if (mysqli_affected_rows($conn)) {
	header("Location: dados.php?id = '$id'");
}else{
	
}
?>
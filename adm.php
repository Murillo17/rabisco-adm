<?php
session_start();
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "sistema";

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname) or die ('Erro de conexão, contate o administrador.');

?>

<!DOCTYPE html>
<html>
<head>

	<title>Moderação</title>
	<link rel="stylesheet" type="text/css" href="adm5.css">
	<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
<link rel="shortcut icon" href="icon2.png">

</head>

<body>
	<div  align="center">

		<img src="rabisco.png" id="mod">
		
	</div>

<?php

	if (isset($_POST['usuario'])){
		$query = "SELECT * FROM tab_usuario WHERE nome_usuario = '" . $_POST['usuario'] . "' and senha_usuario = '" .$_POST['senha'] . "'";
		$resultado = mysqli_query($conexao, $query);
	while($res = mysqli_fetch_array($resultado)){
   $id_usuario = $res['id_usuario'];
   $nome_usuario = $res['nome_usuario'];
   $email_usuario = $res['email_usuario'];
   $_SESSION['logado'];
  
   
}

		if (mysqli_num_rows($resultado) == 1) {
			$_SESSION['id_usuario'] = $id_usuario;
    $_SESSION['nome_usuario'] = $nome_usuario;
    $_SESSION['email_usuario'] = $email_usuario;
    $_SESSION['logado'];

			header("location: postagens.php");
			


		}
		else{
			
			?><div align="center"><nav class="alerta-erro">
  login Inválido
</nav></div><?php ;
			
		}
	}

?>

<nav class="container-informações2">

	<p id="suporte" data-toggle="modal" data-target="#ModalLongoExemplo">Fazer Pedido</p>
	
</nav>
<nav class="container-informações3">

	<p id="suporte">Orçamentos</p>
	
</nav>
<nav class="container-informações4">

	<p id="suporte">Trabalhos</p>
	
</nav>

<div class="container-informações" align="center">
	
	
	<nav class="nav-informações" >
		
		<br>
		<form method="post">
		<i class="fas fa-user" id="user"></i><input type="text" name="usuario" placeholder="Usuário">
		<br>
		<i class="fas fa-unlock-alt" id="password"></i><input type="password" name="senha" placeholder="Senha">
		<br>
		<button type="submit" id="botao-enviar">ENTRAR</button>
		<img src="logo2.png" id="logo">

		<a href= "" id="esqueci-senha">
		Esqueci a senha
		</a>
		</form>
	</nav>
	
<nav class="container-rodape">
	<p>Alcopil - Todos os direitos reservados ® v1.0.0beta</p>
</nav>
</div>
</body>
</html>
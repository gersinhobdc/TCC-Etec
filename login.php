<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>Login</title>	
</head>
<body>
	<div class="container">
	<form action="inserir_dados.php" method="post" class="form-login">	
		<input type="email" id="login" name="email" autofocus placeholder="Login: "> </p>		
		<input type="password" id="senha" name="password" autofocus placeholder="Senha: "> </p>
		
		<input type="submit" value="Login" id="btn-login" class="btn-login">
		<a href="/mudar-senha.html" class="btn-mudar-senha" id="btn-mudar-senha">Esqueceu sua senha?</a>
		<a href="/cadastro.php" class="btn-cadastro" id="btn-cadastro">Ainda não tem uma conta? faça o cadastro agora!</a>
	</form>
</div>

<?php
	$con = mysqli_connect("localhost", "root","", "etecJdAngela");

	if (mysqli_connect_errno()) {
		echo "Erro ao conectar com a base de dados: ".
		mysqli_connect_error();
}


?>
</form>


</body>
</html>

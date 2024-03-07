<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>Login</title>	
</head>
<body>
	<h1>Gerenciamento de laboratórios</h1>
	<div class="container">
	<form action="cadastro.php" method="post" class="form-login">	
		<input type="email" id="login" name="email" autofocus placeholder="Login: "> </p>		
		<input type="password" id="senha" name="password" autofocus placeholder="Senha: "> </p>
		
		<input type="submit" value="Login" id="btn-login" class="btn-login">
		<a href="/TCC-Etec/mudar-senha.html" class="btn-mudar-senha" id="btn-mudar-senha">Esqueceu sua senha?</a><br>
		<a href="/TCC-Etec/cadastro.php" class="btn-cadastro" id="btn-cadastro">Ainda não tem uma conta?<br> Faça o cadastro agora!</a>
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

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>Login</title>	
</head>
<body>
	<form action="inserir_dados.php" method="post">

				
		Email: <input type="email" name="email"> </p>
		
		Senha: <input type="password" name="password"> </p>
		
		<input type="submit" value="Login">

		<a href="/mudar-senha" class="botao-mudar-senha">Esqueceu sua senha?</a>

		<a href="/cadastro" class="botao-cadastro">Ainda não tem uma conta? faça o cadastro agora!</a>

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

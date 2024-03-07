<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
</head>
<body>
    <h2>Cadastro</h2>

    <form action="/login.php" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome"><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>

        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha"><br>

        <label for="permission">Você é um: 
        <input type="radio" id="permission" name="permission">Administrador
        <input type="radio" id="permission" name="permission">Usuário
        </label><br><br>
        <input type="submit" value="Cadastrar">
    </form>


<?php
$servername = "localhost";
$email = "email";
$senha = "senha";
$dbname = "etecJdAngela";

// Cria a conexão
$conn = new mysqli($servername, $email, $senha, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Recebe os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

// Insere os dados no banco de dados
$sql = "INSERT INTO Cadastro (Nome, Email, Senha) VALUES ('$nome', '$email', '$senha')";

if ($conn->query($sql) === TRUE) {
  echo "Novo registro criado com sucesso";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>






</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Controle de patrimônio de Laboratórios</title>
  
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>

    body {
      background-color: #ffffff; 
    }
    .navbar {
      background-color: #001f3f; 
    }
    .navbar-brand {
      color: #ffffff; 
    }
    .container {
      margin-top: 50px;
      border: 5px;
    }
    .table thead th {
      background-color: #0074D9; 
      color: #ffffff; 
    }

    .equipamento-img {
      max-width: 100px;
    }
  </style>
</head>
<body>
 
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Controle de patrimônio</a>
  </div>
</nav>
 
<div class="container">
  <h2>Lista de Equipamentos</h2>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Imagem</th>
        <th scope="col">Nome</th>
        <th scope="col">Quantidade</th>
        <!-- Adicione mais colunas conforme necessário -->
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td><img src="microfone.jpg" alt="Imagem do Equipamento" class="equipamento-img"></td>
        <td>Microfone</td>
        <td>8</td>
      </tr>
    </tbody>
  </table>
</div>
 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
 
</body>
</html>

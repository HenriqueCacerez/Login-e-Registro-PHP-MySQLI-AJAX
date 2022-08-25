<?php
   require_once 'app/conexao.php';
   isConnected(true);

   $idlogin = limpar($_SESSION['usuarioId']);
   $usuario = mysqli_fetch_array(mysqli_query($conn, "SELECT nome FROM usuarios WHERE id = '$idlogin' LIMIT 1"));
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privado | Login-PHP</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
    <!-- HTML - ÁREA PRIVADA --->
    <div class="container">
        <div class="box">
            <h1>Olá, <?= $usuario['nome']; ?></h1>
            <p class="text-center">Você está acessando um conteúdo privado =)</p>
            <a href="sair.php" class="btn-danger center text-center">Sair</a>
        </div>
    </div>
    <!--*/ HTML - ÁREA PRIVADA --->

<!-- Arquivos JavaScript --->
<script src="assets/js/jquery.js"></script>
</body>
</html>
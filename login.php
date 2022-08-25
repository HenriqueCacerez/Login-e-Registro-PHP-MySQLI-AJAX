<?php
   require_once 'app/conexao.php';
   isConnected(false);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar | Login-PHP</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
    <!-- HTML - Realizar login --->
    <div class="container">
        <div class="box">

            <!-- Título ---->
            <h1>Login</h1><hr/>

            <!-- Alerta do Ajax --->
            <div id="msg-login"></div>

            <!-- E-mail ---->
            <div class="form-group">
                <label>Email:</label>
                <input type="email" id="email" placeholder="seu@email.com">
            </div>

            <!-- Senha ---->
            <div class="form-group">
                <label>Senha:</label>
                <input type="password" id="senha" placeholder="*****">
            </div>

            <!-- Botão de Login ---->
            <div class="form-footer">
                <button class="btn-w100" id="btn-login">Entrar</button>
            </div>

            <!-- Registrar-se ---->
            <p class="text-center mt-25">Não tem uma conta? 
                <a href="registro" class="text-p">Registre-se</a>
            </p>

        </div>
    </div>
    <!--*/ HTML - Realizar login --->


<!-- Arquivos JavaScript --->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/form_login.js"></script>

</body>
</html>
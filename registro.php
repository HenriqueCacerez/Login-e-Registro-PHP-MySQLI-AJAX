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
    <title>Entrar | registro-PHP</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
    <!-- HTML - Realizar login --->
    <div class="container">
        <div class="box">

            <!-- Título ---->
            <h1>Registre-se</h1><hr/>

            <!-- Alerta do Ajax --->
            <div id="msg-registro"></div>

            <!-- Nome ---->
            <div class="form-group">
                <label>Nome:</label>
                <input type="email" id="nome" placeholder="Nome">
            </div>

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

            <!-- Senha ---->
            <div class="form-group">
                <label>Confirme a senha:</label>
                <input type="password" id="confirmar_senha" placeholder="*****">
                <small>A senha precisa ter 5 ou mais caracteres</small>
            </div><br>


            <!-- Botão de Login ---->
            <div class="form-footer">
                <button class="btn-w100" id="btn-registro">Registrar-se</button>
            </div>

            <!-- Cadastrar-se ---->
            <p class="cadastrar text-center mt-25">Já tem uma conta? <a href="login" class="text-p">Faça o login</a></p>

        </div>
    </div>
    <!--*/ HTML - Realizar login --->


<!-- Arquivos JavaScript --->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/form_registro.js"></script>

</body>
</html>

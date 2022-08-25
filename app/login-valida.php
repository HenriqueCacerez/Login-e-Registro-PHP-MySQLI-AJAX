<?php

    if(isset($_POST['email']) AND isset($_POST['senha'])){
        require_once 'alertas.php';
        require_once 'conexao.php';

        $email = limpar($_POST['email']);
        $senha = limpar($_POST['senha']);

        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)):
            echo msgErro("Informe um email válido!");
        exit;
        endif;

        $getUserByEmail = mysqli_fetch_array(mysqli_query($conn, "SELECT id, senha FROM usuarios WHERE email = '$email' LIMIT 1"));

        if(!isset($getUserByEmail['id']) OR !password_verify($senha, $getUserByEmail['senha'])):
            echo msgErro("Email e/ou Senha incorretos");
        exit;
        endif;

        $_SESSION['usuarioId'] = $getUserByEmail['id'];
        echo '<script>window.location="area-privada";</script>';

    } else {
        echo '<script>window.location="../login";</script>';
    }
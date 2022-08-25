<?php

    if(isset($_POST['nome']) AND isset($_POST['email']) AND isset($_POST['senha']) AND isset($_POST['confirmar_senha'])){
        require_once 'alertas.php';
        require_once 'conexao.php';

        $nome = limpar($_POST['nome']);
        $email = limpar($_POST['email']);
        $senha = limpar($_POST['senha']);
        $confirmar_senha = limpar($_POST['confirmar_senha']);
        $data_registro = date('Y-m-d H:i:s');

        if(!!preg_match('|^[\pL\s]+$|u', $nome) != 1):
            echo msgErro("Informe um nome válido!");
            exit;
        endif;

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
            echo msgErro("Informe um email válido!");
            exit;
        endif;

        if($senha != $confirmar_senha):
            echo msgErro("As senhas não são iguais!");
            exit;
        endif;

        if(mb_strlen($senha) < 5):
            echo msgErro("A senha precisa ter 5 ou mais caracteres");
            exit;
        endif;

        $getUserByEmail = mysqli_fetch_array(mysqli_query($conn, "SELECT id FROM usuarios WHERE email = '$email' LIMIT 1"));

        if(isset($getUserByEmail)):
            echo msgErro("Já existe um usuário cadastrado com o mesmo email");
            exit;
        endif;

        $senha = password_hash($senha, PASSWORD_DEFAULT);

        $createUser = mysqli_query($conn, "INSERT INTO usuarios (nome, email, senha, data_registro) VALUES ('$nome', '$email', '$senha', '$data_registro')");

        if(mysqli_affected_rows($conn) == 0):
            echo msgErro("Ops! Houve um erro ao realizar o registro. Tente novamente.");
            exit;
        endif;

        echo msgSuccess("Registro realizado! Faça o login para continuar.");

    } else {
        echo '<script>window.location="../login";</script>';
    }
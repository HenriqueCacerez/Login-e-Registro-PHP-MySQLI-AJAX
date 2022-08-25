<?php
    session_start();
    date_default_timezone_set('America/Sao_Paulo');

    $conn = mysqli_connect("localhost", "root", "", "git");
    mysqli_set_charset($conn, "utf8mb4");

    

    function limpar($string){
        global $conn;
        $string = strip_tags($string);
        return mysqli_real_escape_string($conn, $string);
    }

    function isConnected($param){
        if($param == true AND !isset($_SESSION['usuarioId'])):
            header("location: login");
        exit;
        endif;

        if($param == false AND isset($_SESSION['usuarioId'])):
            header("location: area-privada");
        exit;
        endif;
    }